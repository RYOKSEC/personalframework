<?php

namespace App\Http\Controllers;
use \Conner\Tagging\Model\Tagged;
use \Conner\Tagging\Model\Tag;
use \Conner\Tagging\Taggable;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class guest_blog_search extends Controller
{
    public function search()
      {
          $q = Input::get ( 'q' );
          $posts = Tagged::where('tag_name','LIKE','%'.$q.'%')->with('posts')->get();
          dd($posts);
          if(count($posts) > 0)
              return view('guest.blog.search_resualt' , ['title' => 'Resaults'])->withDetails($posts)->withQuery ( $q );
          else return view ('guest.blog.no_resault' , ['title' => 'Resaults'])->withMessage('No Details found');
      }

}
