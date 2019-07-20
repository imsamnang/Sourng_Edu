<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\QuizResults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $limit = 9;

    public function showAppearedQuiz(Request $request)
    {
        $userId  = Auth::user()->id;
        $userQuizs = QuizResults::with('subject','user')
                                ->where('user_id',$userId)
                                ->paginate($this->limit);
        return view('ProjectActivities.students.dashboard',compact('userQuizs'));
    }

    public function singleResult(Request $request, $QuizResultsId)
    {
        $allQuestions = \DB::table('user_answers')
        ->join('answers','user_answers.question_id','answers.question_id')
        ->join('questions','questions.id', '=', 'user_answers.question_id')
        ->join('subject_quizzes','subject_quizzes.id', '=', 'user_answers.subject_id')
        ->join('options','answers.option_id','options.id')
        ->where('user_answers.userData_appear_id', $QuizResultsId)
        ->get(array('user_answers.*', 'subject_quizzes.*', 'questions.*','answers.*','options.title as answername'));
        //for chart************
        $countTrue = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 1)->count();
        $countFalse = \DB::table('user_answers')->where('userData_appear_id' , $QuizResultsId)->where('correct' , 0)->count();
        $totalQuestion = $countTrue + $countFalse;
        // $chart = Charts::create('pie', 'highcharts')
        // ->title('Result Analysis')
        // ->labels(['Correct', 'Incorrect'])
        // ->values([$countTrue,$countFalse])
        // ->dimensions(350,300)
        // ->responsive(false);
        // return $allQuestions;
        return view('ProjectActivities.students.viewSingleResult',compact('allQuestions','countTrue','countFalse','totalQuestion'));
         // ['question' => $allQuestions, 'chart' => $chart, 'countTrue' => $countTrue, 'totalQuestion' =>$totalQuestion]);
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
