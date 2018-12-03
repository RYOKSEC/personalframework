<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Admin_blog_Controller extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function create()
  {
    return view('admin.blog.create');
  }

  public function store(Request $request)
  {
    {
      $this->validate($request,[
        'title'=>'required',
        'body'=>'required',
        'tags'=>'required',
        'slug'=>'required',
      ]);

      $input = $request->all();
    	$tags = explode(",", $request->tags);

          if ($input != null) {
            $post = post::create($input);
          	$post->tag($tags);
            return redirect('/admin/blog')->with('success' , 'Post added successfully');
          }
          return redirect('/admin/blog');
         }
       }
}
