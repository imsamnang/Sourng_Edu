<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $table='institute';
    
    protected $fillable = ['name_kh', 'name_en', 'address', 'location', 'logo','status'];

}
