<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
  protected $table = 'questions';

  public function answer()
  {
    return $this->hasOne('App\answer');
  }
}
