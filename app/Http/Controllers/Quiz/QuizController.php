<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\CourseShort;
use App\Models\Courseshortstudent;
use App\Models\Quiz\Answer;
use App\Models\Quiz\AverageScore;
use App\Models\Quiz\Question;
use App\Models\Quiz\QuestionQuiz;
use App\Models\Quiz\QuizResults;
use App\Models\Quiz\SubjectQuiz;
use App\Models\Quiz\SubjectType;
use App\Models\Quiz\UserAnswer;
use App\Models\Subject;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class QuizController extends Controller
{
  public function index()
  {
    // $generalSetting = GeneralSetting::findOrFail(1)->first();
    $allQuiz = SubjectQuiz::all();
    return view('ProjectActivities.quizs.subject.index',compact('allQuiz'));
  }

  public function front()
  {
    // DB::enableQueryLog();
    // $csStudent = Courseshortstudent::where('student_id',14)->get();
    // dd(DB::getQueryLog($csStudent));
    return view('ProjectActivities.quizs.test_type');
  }

  public function subTypePretest()
  {
    return view('ProjectActivities.quizs.subtype_pretest');
  }

  public function subTypePosttest()
  {
    return view('ProjectActivities.quizs.subtype_posttest');
  }

  public function preTest()
  {
    // DB::enableQueryLog();
    // $csStudent = Courseshortstudent::where('student_id',14)->get();
    // dd(DB::getQueryLog($csStudent));
    $test_type = 1;
    $allQuiz= SubjectQuiz::whereNotIn('id',
                QuizResults::where('user_id',Auth::user()->id)
                            ->where('test_type_id',1)
                ->pluck('subject_id'))
                ->get();
    $allQuizDone= SubjectQuiz::WhereIn('id',
                QuizResults::where('user_id',Auth::user()->id)
                            ->where('test_type_id',1)
                ->pluck('subject_id'))
                ->get();
    return view('ProjectActivities.quizs.mainquiz',compact('allQuiz','allQuizDone','test_type'));
  }

  public function postTest()
  {
    $test_type=2;
    // DB::enableQueryLog();
    // $csStudent = Courseshortstudent::where('student_id',14)->get();
    // dd(DB::getQueryLog($csStudent));
    $allQuiz= SubjectQuiz::whereNotIn('id',
                QuizResults::where('user_id',Auth::user()->id)
                            ->where('test_type_id',2)
                ->pluck('subject_id'))
                ->get();
    $allQuizDone= SubjectQuiz::WhereIn('id',
                QuizResults::where('user_id',Auth::user()->id)
                            ->where('test_type_id',2)
                ->pluck('subject_id'))
                ->get();
    return view('ProjectActivities.quizs.mainquiz',compact('allQuiz','allQuizDone','test_type'));
  }

  public function create()
  {
    $quizzes = Subject::pluck('title','title');
    $sub_types = SubjectType::pluck('type','id');
    return view('ProjectActivities.quizs.subject.create',compact('quizzes','sub_types'));
  }

  public function store(Request $request)
  {
    $ref = '#'.str_random(10);
    $slug = $this->make_slug($request->name);
    // $month = date("n");
    // //the month number without any leading zeros
    // $month = date("n", strtotime($month));
    // //Calculate the year quarter.
    // $yearQuarter = ceil($month / 3);
    $quiz = SubjectQuiz::create([
      'title'  => $request->name,
      'subtype_id'  => $request->type,
      'slug'  => $slug,
      'reference' => $ref,
      'max_attempts'  => $request->max_attempts,
      'pass_percentage' => (int)$request->pass_percentage,
      'question_duration' => (int)$request->question_duration,
      'per_q_mark' => 1,
      'user_id' => Auth::user()->id,
      'status'  => $request->active
    ]);

    return redirect()->route('quiz.subject.show', $quiz->slug);
  }

  public function show($quiz)
  {
    $quiz = SubjectQuiz::where('slug', $quiz)->get()->first();
    return view('ProjectActivities.quizs.subject.show', compact('quiz'));
  }

  public function edit($quiz)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($quiz)
  {
    $quiz = SubjectQuiz::where('id', $quiz)->first();
    $this->deleteQuestions($quiz);
    $subOps = QuestionQuiz::where('subject_quiz_id',$quiz->id)->delete();
    $quiz->delete();
    return back();
  }

  public function deleteQuestions($quiz)
  {
    $questions = $quiz->questions;
    foreach ($questions as $question) {
      $question->delete();
      foreach ($question->answers as $ans) {
        $ans->delete();
      }
      foreach ($question->options as $option) {
        $option->delete();
      }
    }
  }

  public function start($quiz)
  {
    $quiz = SubjectQuiz::where('slug', $quiz)->get()->first();
    $question_id = QuestionQuiz::where('subject_quiz_id', $quiz->id)->get();
    $questions = collect();
    foreach ($question_id as $id){
        $question = Question::with('options', 'answers')->where('id', $id->question_id)->first();
        $questions->push($question);
    }
    return view('ProjectActivities.quizs.start', compact('quiz', 'questions'));
  }

  public function takeQuiz(Request $request, $quiz, $test_type)
  {
    $sub = SubjectQuiz::where('slug',$quiz)->first();
    $duration = $sub->question_duration;
    $allQuestion = $sub->questions()->paginate(1);
    $totalQuestionCount = $sub->questions()->count();
    return view('ProjectActivities.quizs.start',compact('sub','allQuestion','duration','totalQuestionCount','test_type'));
  }

  public function nextClickStore(request $request)
  {
    $test_type = $request->test_type;
    $page = $request->input('page');
    $question_id = $request->input('question_id');
    $time_remaining = $request->input('queDuration');
    $question_id = reset($question_id);
    $quizid = $request->input('quiz-id');
    $quizslug = $request->input('quiz-slug');
    $userId  = Auth::user()->id;
    $userName  = Auth::user()->name;
    $answer = $request->input('answer');
    if ($answer != null) {
      $answer = reset($answer);
    }
    $result_date = Carbon::now()->toDateString();
    $duration = preg_split('/:/', $time_remaining);
    $time_remaining_in_seconds = ((int)$duration[0] * 60) + ((int)$duration[1]);
    if ($page == 1) {
        $newQuizAppear = new QuizResults;
        $newQuizAppear->user_id = $userId;
        $newQuizAppear->subject_id = $quizid;
        $newQuizAppear->user_name = $userName;
        $newQuizAppear->marks_scored = 0;
        $newQuizAppear->test_type_id = $test_type;
        $newQuizAppear->result_date = $result_date;
        $newQuizAppear->save();
    }
    $uniqueQuizQuery = QuizResults::where('user_id',$userId)->orderBy('id','desc')->first();
    $uniqueQuizAppearId = $uniqueQuizQuery->id;
    $marks_scored = $uniqueQuizQuery->marks_scored;
    $user_Answer_Id = new UserAnswer;
    $user_Answer_Id->user_id = $userId;
    $user_Answer_Id->userData_appear_id = $uniqueQuizAppearId;
    $user_Answer_Id->subject_id = $quizid;
    $user_Answer_Id->question_id = $question_id;
    $user_Answer_Id->test_type_id = $test_type;
    if ($answer == null) {
      $user_Answer_Id->user_answer_id = "Not Answered";
    }else{
      $user_Answer_Id->user_answer_id = $answer;
    }
    $findQuestion = Answer::where('question_id',$question_id)->first();
    $correctAnsDb = $findQuestion->option_id;
    $findDuration = SubjectQuiz::where('id',$quizid)->first();
    $totalTimeForQuestion = $findDuration->question_duration;
    $time_taken = $totalTimeForQuestion - $time_remaining_in_seconds;
    $user_Answer_Id->time_taken = $time_taken;
    if ($correctAnsDb == $answer) {
        $marks_scored += 1;
        QuizResults::where('id', $uniqueQuizAppearId)
                    ->update(['marks_scored' => $marks_scored]);
        $user_Answer_Id->correct = 1;
    }else{
      $user_Answer_Id->correct = 0;
    }
    $user_Answer_Id->save();
    $page += 1;
    return redirect('/quiz/takequiz/'.$quizslug.'/'.$test_type.'?page='.$page);
  }

  public function storeQuiz(Request $request)
  {
    $test_type = $request->test_type;
    $question_id = $request->input('question_id');
    $time_remaining = $request->input('queDuration');
    $question_id = reset($question_id);
    $quizid = $request->input('quiz-id');
    $userId  = Auth::user()->id;
    $userName  = Auth::user()->name;
    $answer = $request->input('answer');
    if ($answer) {
      $answer = reset($answer);
    }else{
      $answer = '';
    }
    $duration = preg_split('/:/', $time_remaining);
    $time_remaining_in_seconds = ((int)$duration[0] * 60) + ((int)$duration[1]);
    $uniqueQuizQuery = QuizResults::where('user_id',$userId)->orderBy('id','desc')->first();
    $uniqueQuizAppearId = $uniqueQuizQuery->id;
    $marks_scored = $uniqueQuizQuery->marks_scored;
    $user_Answer_Id = new UserAnswer;
    $user_Answer_Id->user_id = $userId;
    $user_Answer_Id->userData_appear_id = $uniqueQuizAppearId;
    $user_Answer_Id->subject_id = $quizid;
    $user_Answer_Id->question_id = $question_id;
    if ($answer == null) {
      $user_Answer_Id->user_answer_id = "Not Answered";
    }else{
      $user_Answer_Id->user_answer_id = $answer;
    }
    $findQuestion = Answer::where('question_id', $question_id)->first();
    $correctAnsDb = $findQuestion->option_id;
    $findDuration = SubjectQuiz::where('id',$quizid)->first();
    $totalTimeForQuestion = $findDuration->question_duration;
    $time_taken = $totalTimeForQuestion - $time_remaining_in_seconds;
    $user_Answer_Id->time_taken = $time_taken;
    if ($correctAnsDb == $answer) {
        $marks_scored += 1;
        QuizResults::where('id', $uniqueQuizAppearId)
                    ->update(['marks_scored' => $marks_scored]);        
        $user_Answer_Id->correct = 1;
    }else{
        $user_Answer_Id->correct = 0;
    }
    $user_Answer_Id->test_type_id = $test_type;
    $user_Answer_Id->save();
    $marks_scored = $marks_scored;
    $avgScoreCount = AverageScore::where('user_id', $userId)->where('subject_id', $quizid)->count();
    $quizAppearCount = QuizResults::where('user_id', $userId)->where('subject_id', $quizid)->count();
    $avg_marks = QuizResults::where('user_id', $userId)
                            ->where('subject_id', $quizid)
                            ->avg('marks_scored');
    $avgScore = new AverageScore;
    if ($avgScoreCount == 0 ) {
      $avgScore->user_id = $userId;
      $avgScore->subject_id = $quizid;
      $avgScore->avg_score = $avg_marks;
      $avgScore->appear_count = $quizAppearCount;
      $avgScore->test_type_id = $test_type;
      $avgScore->save();
    }else{
      $userFindQuery = AverageScore::where('user_id', $userId)->where('subject_id', $quizid)->select('avgid');
      $getAvgidObj = $userFindQuery->get('avgid');
      foreach ($getAvgidObj as $id){
         $avgId = $id->avgid;
     }
     $updateAvgScore = ['avg_Score' => $avg_marks, 'appear_count' => $quizAppearCount];
     AverageScore::where('avgid', $avgId)->update($updateAvgScore);
   }
   $sub = SubjectQuiz::where('id', $quizid)->first();
   $questionsCount = $sub->questions()->count();
   $percentage_correct = 100 * $marks_scored / $questionsCount;
   
   return view('ProjectActivities.quizs.finishQuiz',compact('percentage_correct','questionsCount','uniqueQuizAppearId','sub','marks_scored'));
  }

// public function getBeforeStartTest($id){
  //   $subject = SubjectQuiz::find($id);
  //   session()->forget('next_question_id');
  //   return view('quizs.start', compact('subject'));
  // }
  // public function getStartTest($id, Request $request)
  // {
  //   $subject = SubjectQuiz::find($id);
  //   $questions = $subject->questions()->get();
  //   // return ($questions);
  //   $first_question_id = $subject->questions()->min('id');
  //   // dd($first_question_id);
  //   $last_question_id = $subject->questions()->max('id');
  //   $duration = $subject->duration;

  //   if(session('next_question_id')){
  //     $current_question_id = session('next_question_id');
  //   }
  //   else{
  //     $current_question_id = $first_question_id;
  //     session(['next_question_id'=>$current_question_id]);
  //   }
  //   // dd($current_question_id);
  //   return view('quizs.test', compact('subject', 'questions', 'current_question_id', 'first_question_id', 'last_question_id', 'duration'));
  // }

  // public function getNextQuestion($id, Request $request)
  // {
  //   $question = Question::findOrFail($id);
  //   $last_question_id = count(Question::where('subject_id',$id)->get());
  //   return view('quizs.quiz-test',compact('question','last_question_id'));
  // }

  // public function postSaveQuestionResult($id, Request $req)
  // {
  //   // return $req->all();
  //   //save result
  //   $subject = SubjectQuiz::find($id);
  //   $question = Question::find($req->get('question_id'));
  //   $question_id = $question->id;
  //   $count_questions = $subject->questions()->max('id');
  //   // if ($req->get('option') != null) {
  //     //save the answer into table
  //     // $duration = $subject->duration * 60;
  //     // $time_taken = ((int) $req->get('time_spent' . $question->id));
  //     // $time_per_question = $duration - $time_taken;
  //   //dd($time_taken);
  //     // Answer::create([
  //     //   'user_id' => Auth::user()->id,
  //     //   'question_id' => $req->get('question_id'),
  //     //   'subject_id' => $id,
  //     //   'user_answer' => $req->get('option'),
  //     //   'question' => $question->question,
  //     //   'option1' => $question->option1,
  //     //   'option2' => $question->option2,
  //     //   'option3' => $question->option3,
  //     //   'option4' => $question->option4,
  //     //   'right_answer' => $question->answer,
  //     //   'time_taken' => $time_per_question
  //     // ]);
  //   // }
  //   $next_question_id = $subject->questions()->where('id', '>', $req->get('question_id'))->min('id');
  //   // return $next_question_id;
  //   // return redirect()->route('before-exam',[$next_question_id]);
  //   if ($next_question_id !=null) {
  //     return Response::json(['next_question_id' => $next_question_id,'count_questions'=>$count_questions]);
  //     // return redirect()->route('before-exam',$next_question_id);
  //   }
  //   // return redirect()->route('result', [$id]);
  // }

  // public function saveAnswer(Request $request, $id)
  // {
  //   // return $request->all();
  //   // $qAns= $request->answer_option;
  //   // return $qAns;
  // }
  // public function create()
  // {
  //     //
  // }

}
