<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookMasters extends BaseModel
{
    protected $table = 'book_masters';
    protected $fillable = ['created_by', 'last_updated_by', 'institute_id', 'title', 'status'];
}
