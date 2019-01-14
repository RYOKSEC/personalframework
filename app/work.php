<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
  protected $table = 'works';

public function comments()
{
  return $this->hasMany(gallarey_comments::class);
}

}
