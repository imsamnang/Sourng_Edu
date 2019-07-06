<?php

namespace App\Models\Quiz;

use App\Models\Quiz\Option;
use App\Models\Quiz\Question;
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
}
