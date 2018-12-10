<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\answer;
use Illuminate\Support\Facades\DB;

class GuestQuestionsController extends Controller
{
  public function answerdquestions()
  {
    $title = DB::table('users')->first();

if ($title == null) {
  return redirect('/register');
}else{
    $Q = question::all();
    $A = answer::all();
    return view('guest.questions.answerd', ['title' => 'Answerd Questions'] ,compact('Q' , 'A'));
  }
  }



  public function askquestions()
  {
    $title = DB::table('users')->first();

if ($title == null) {
  return redirect('/register');
}
  else{
    return view('guest.questions.ask' , ['title' => 'Ask']);
  }

  }

  public function store_question(Request $request)
  {
    $this->validate($request,[
      'question'=>'required',
    ]);
      // create question
      $question = new question;
      $question->question = $request->input('question');
      // save the question
      if ($question != null) {
        $question->save();
        return redirect('questions/ask')->with('success', 'question Submitted successfully ^_^');
      }
      return redirect('questions/ask');
  }
}
