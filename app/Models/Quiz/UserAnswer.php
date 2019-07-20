<?php

namespace App\Models\Quiz;

use App\Models\Quiz\Question;
use App\Models\Quiz\SubjectQuiz;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
	protected $table = 'user_answers';
	protected $dates = ['created_at'];

	public function subject()
	{
		return $this->belongsTo(SubjectQuiz::class,'subject_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class,'user_id');
	}

	public function question()
	{
		return $this->belongsTo(Question::class,'question_id');
	}

	public function answer()
  {
    return $this->hasOne(Answer::class,'question_id','question_id');
  }

  public function option()
  {
    return $this->belongsTo(Option::class,'user_response');
  }
}
