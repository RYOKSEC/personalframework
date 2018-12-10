<?php

namespace App\Http\Controllers;
use App\CV;
use App\work;
use App\post;
use \Conner\Tagging\Model\Tagged;
use \Conner\Tagging\Taggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Guestcontroller extends Controller
{
  public function gethome()
  {
    $title = DB::table('users')->first();
      if ($title == null) {
        return redirect('/register');
      }else{
        $cvg = CV::all();
        return view('guest.cv', compact('cvg', $cvg),['title' => 'Cv']);
  }
  }
  public function getgallarey()
  {
    $title = DB::table('users')->first();
    if ($title == null) {
      return redirect('/register');
    }else{
      $works = Work::all();
      return view('guest.worksgallarey.worksgallarey' , ['title' => 'Worksgallarey'])->with('works', $works);
  }
  }

  public function showcase($id , $slug)
  {
    $showwork = Work::find($id);
    return view('guest.worksgallarey.showcase' , compact('showwork') , ['title' => 'Worksgallarey']);
  }

  public function getblog()
  {
    $posts = post::all();
    return view('guest.blog.showposts' , ['title' => 'Blog'] , compact('posts'));
  }
}
