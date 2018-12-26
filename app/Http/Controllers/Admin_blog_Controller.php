<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\post_tagged;
use Illuminate\Support\Facades\DB;
use \Conner\Tagging\Model\Tagged;

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
            $post_id = DB::table('tagging_tagged')->latest('taggable_id')->first();
            $post_id = $post_id->taggable_id;
            $tagged_id = DB::table('tagging_tagged')->latest('id')->first();
            $tagged_id = $tagged_id->id;
            $relationship = new post_tagged;
            $relationship->post_id = $post_id;
            $relationship->tagged_id = $tagged_id;
            $relationship->save();
            return redirect('/admin/blog')->with('success' , 'Post added successfully');
          }
          return redirect('/admin/blog');
         }
       }

       public function destroy_post($id)
       {
         $post = Post::find($id);
          if ($post != null) {
         $post->untag();
         $post->delete();
         return redirect('/admin/blog')->with('success' , 'Post deleted successfully');
       }else{
           return redirect('/admin/blog');
       }
     }

      public function edit($id)
      {
        $data = post::find($id);
        return view('admin.blog.edit')->with('data' , $data);
      }

       public function update(Request $request , $id)
       {
         $this->validate($request,[
           'title'=>'required',
           'body'=>'required',
           'tags'=>'required',
           'slug'=>'required',
         ]);

         $input = $request->all();
       	$tags = explode(",", $request->tags);
        $post = Post::find($id);
             if ($input != null) {
               $post->save($input);
             	$post->retag($tags);
               return redirect('/admin/blog')->with('success' , 'Post edited successfully');
             }else{
             return redirect('/admin/blog');
           }
       }
}
