<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallarey_comments extends Model
{
  public function works()
 {
     return $this->belongsTo(work::class);
 }
}
