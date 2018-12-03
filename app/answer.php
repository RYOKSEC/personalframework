<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
protected $table = 'answers';
    public function question()
    {
      return $this->belongsTo('App\question' ,'question_id');
    }
}
