<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Question;
use App\Models\Quiz\QuestionQuiz;
use App\Models\Quiz\SubjectQuiz;
use App\Models\Quiz\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showAppearedQuiz(Request $request)
    {
        $userId  = Auth::user()->id;
        $userAnswer = UserAnswer::where('user_id',$userId)->get();
        return $userAnswer;
        // $quizAppeared = \DB::table('user_answers')
        // ->join('subject_quizzes', 'subject_quizzes.id', '=', 'user_answers.subject_id')
        // ->join('users','users.id', '=', 'subject_quizzes.user_id')
        // ->where('user_answers.user_id', $userId)
        // ->select(array('user_answers.*', 'users.name','subject_quizzes.title','subject_quizzes.total_questions'))
        // ->paginate(12);
        return view('ProjectActivities.students.dashboard');
    }

    public function singleResult(Request $request, QuizAppear $quizappearid)
    {
        $allQuestions = \DB::table('user_responses')
        ->join('questions','questions.questionid', '=', 'user_responses.question_id')
        ->join('quizzes','quizzes.quizid', '=', 'user_responses.quiz_id')
        ->where('user_responses.userData_appear', $quizappearid->quizappearid)
        ->get(array('user_responses.*', 'quizzes.*', 'questions.*'));
        //for chart************
        $countTrue = \DB::table('user_responses')->where('userData_appear' , $quizappearid->quizappearid)->where('correct' , 1)->count();
        $countFalse = \DB::table('user_responses')->where('userData_appear' , $quizappearid->quizappearid)->where('correct' , 0)->count();
        $totalQuestion = $countTrue + $countFalse;
        $chart = Charts::create('pie', 'highcharts')
        ->title('Result Analysis')
        ->labels(['Correct', 'Incorrect'])
        ->values([$countTrue,$countFalse])
        ->dimensions(350,300)
        ->responsive(false);
        return view('viewSingleResult', ['question' => $allQuestions, 'chart' => $chart, 'countTrue' => $countTrue, 'totalQuestion' =>$totalQuestion]);
    }

    public function viewLeaderboard(Request $request, Quiz $quiz)
    {
        $topScorer = \DB::table('average_scores')
        ->join('quizzes', 'quizzes.quizid', '=' , 'average_scores.quiz_id')
        ->join('users', 'users.id', '=', 'average_scores.user_id')
        ->where('quiz_id', $quiz->quizid)
        ->orderBy('avg_score', 'desc')
        ->limit(10)
        ->get(array('users.name', 'quizzes.title', 'quizzes.total_questions', 'average_scores.*'));
        return view('quizLeaderboard', ['leaderboard' => $topScorer]);
    }
}
