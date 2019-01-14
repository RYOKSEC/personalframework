<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\work;
use App\gallarey_comments;

class gallarey_comments_controller extends Controller
{
    public function store_comment(Request $request)
    {
      $this->validate($request,[
        'comment'=>'required',
      ]);
      $comment = new gallarey_comments;
      $comment->body = $request->input('comment');
      $comment->work_id = $request->input('work_id');
         if ($comment != null) {
      $comment->save();
      return redirect('/worksgallarey')->with('success', 'comment submitted successfull ^_^');;
    }
    return redirect('/worksgallarey')->with('error' , 'error happened please try again ^_*');
    }

}
