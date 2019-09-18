<?php
namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\QuizResults;
use App\Models\Quiz\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
  protected $limit = 9;

  public function showAppearedQuiz(Request $request)
  {
    $userId  = Auth::user()->id;
    // DB::enableQueryLog();                         
    $userQuizs_Pretest = QuizResults::with('subject','user')
                            ->where('user_id',$userId)
                            ->where('test_type_id',1)
                            ->paginate($this->limit);
    $userQuizs_Posttest = QuizResults::with('subject','user')
                            ->where('user_id',$userId)
                            ->where('test_type_id',2)
                            ->paginate($this->limit);
    // dd(DB::getQueryLog());
    return view('ProjectActivities.students.dashboard',compact('userQuizs_Pretest','userQuizs_Posttest'));
  }

  public function singleResult(Request $request, $QuizResultsId)
  {
    // DB::enableQueryLog();
    $allUserAnswer = UserAnswer::with('option','question','answer')
                                ->where('subject_id',$QuizResultsId)
                                ->get();
    // dd(DB::getQueryLog());                                  
    $subjectName = UserAnswer::with('subject')
                              ->where('subject_id',$QuizResultsId)
                              ->first();
    //for chart************
    $countTrue = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 1)->count();
    $countFalse = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 0)->count();
    $totalQuestion = $countTrue + $countFalse;
    return view('ProjectActivities.students.viewSingleResult',compact('countTrue','countFalse','totalQuestion','allUserAnswer','subjectName'));
  }

  public function show($id)
  {
    $test = QuizResults::find($id)->load('user');
    // return $test;
    if ($test) {
      $results = UserAnswer::where('userData_appear_id', $id)
          ->with('question')
          ->with('question.options')
          ->with('answer')
          ->get();
    }
    // return $results; 
    return view('ProjectActivities.quizs.result.show', compact('test', 'results'));
  }
  public function viewAllResult(Request $request,$test_type_id)
  {
    $allResults= QuizResults::where('test_type_id',$test_type_id)->get();
    // $countTrue = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 1)->count();
    // $countFalse = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 0)->count();
    // $totalQuestion = $countTrue + $countFalse;                                
    return view('ProjectActivities.students.viewAllResult',compact('allResults'));                                
  }

  public function viewLeaderboard(Request $request, Quiz $quiz)
  {
      $topScorer = \DB::table('average_scores')
      ->join('subject_quizzes', 'subject_quizzes.quizid', '=' , 'average_scores.quiz_id')
      ->join('users', 'users.id', '=', 'average_scores.user_id')
      ->where('quiz_id', $quiz->quizid)
      ->orderBy('avg_score', 'desc')
      ->limit(10)
      ->get(array('users.name', 'subject_quizzes.title', 'subject_quizzes.total_questions', 'average_scores.*'));
      return view('quizLeaderboard', ['leaderboard' => $topScorer]);
  }
}
