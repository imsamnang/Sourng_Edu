<?php

namespace App\Models\Quiz;

use App\Models\Quiz\SubjectQuiz;
use App\User;
use Illuminate\Database\Eloquent\Model;

class QuizResults extends Model
{
  protected $table = 'quiz_results';
  protected $guarded = [];
  // public $timestamps = false;
  protected $dates = ['created_at'];

  public function user()
  {
      return $this->belongsTo(User::class,'user_id');
  }

  public function subject()
  {
      return $this->belongsTo(SubjectQuiz::class,'subject_id');
  }  
}
