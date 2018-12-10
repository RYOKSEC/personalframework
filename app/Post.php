<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
  use \Conner\Tagging\Taggable;

    protected $table ='posts';

    protected $fillable = [ 'title', 'body','slug' ];

    public function tags()
    {
      return $this->belongsToMany('\Conner\Tagging\Model\Tagged');
    }
}
