<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Quiz\Question;
use App\Models\Quiz\QuestionQuiz;
use App\Models\Quiz\SubjectQuiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
  public function index()
  {
    $generalSetting = GeneralSetting::findOrFail(1)->first();
    $subjects = SubjectQuiz::all();
    return view('quizs.subject',compact('generalSetting','subjects'));
  }

  public function create()
  {
    return view('quizs.subject.create');
  }

  public function store(Request $request)
  {
    $ref = '#'.str_random(10);
    $slug = str_slug($request->name,'-');
    $quiz = SubjectQuiz::create([
      'title'  => $request->name,
      'slug'  => $slug,
      'reference' => $ref,
      'max_attempts'  => $request->max_attempts,
      'pass_percentage' => $request->pass_percentage,
      'status'  => $request->active
    ]);

    return redirect()->route('quiz.subject.show', $quiz->slug);
  }

  public function show($quiz)
  {
    $quiz = SubjectQuiz::where('slug', $quiz)->get()->first();
    return view('quizs.subject.show', compact('quiz'));
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
    return view('quizs.start', compact('quiz', 'questions'));
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
