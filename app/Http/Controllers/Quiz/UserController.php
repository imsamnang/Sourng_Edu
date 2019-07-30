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
        $userQuizs = QuizResults::with('subject','user')
                                ->where('user_id',$userId)
                                ->paginate($this->limit);   
        // dd(DB::getQueryLog());
        return view('ProjectActivities.students.dashboard',compact('userQuizs'));
    }

    public function singleResult(Request $request, $QuizResultsId)
    {
      // DB::enableQueryLog();
      $allUserAnswer = UserAnswer::with('option','question','answer')
                                  ->where('userData_appear_id',$QuizResultsId)
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
