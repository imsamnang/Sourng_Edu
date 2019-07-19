<?php

namespace App\Models\Quiz;

use App\Models\Quiz\UserAnswer;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
 	public function question()
  {
    return $this->belongsTo(Question::class);
  }

  public function option()
  {
    return $this->belongsTo(Option::class);
  }

  public function userAnswer()
  {
    return $this->belongsTo(UserAnswer::class,'question_id','question_id');
  }
}
