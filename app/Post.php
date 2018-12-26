<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
  use \Conner\Tagging\Taggable;

    protected $table ='posts';

    protected $fillable = [ 'title', 'body','slug' , 'post_id' , 'tag_id'];

    public function tags()
    {
      return $this->belongsToMany('\Conner\Tagging\Model\Tagged');
    }
}
