<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\question;
use App\answer;
use Illuminate\Support\Facades\DB;

class AdminQuestionsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showquestions()
  {
    $Q = question::all();
    return view('admin.questions.showquestions', compact('Q'));
  }


    public function asnwerquestion($id)
    {
      $question = question::find($id);
      return view('admin.questions.answer' , compact('question'));
    }

  public function store_answer(Request $request , $id)
  {
    $this->validate($request,[
      'answer'=>'required',
    ]);
    $answer = new answer;
    $answer->answer = $request->input('answer');
    $answer->question_id = $request->input('question_id');
       if ($answer != null) {
    $answer->save();
    return view('admin.questions.plus1', ['id' => $id]);
  }
  return redirect('admin/question/answer');
  }

  public function plus1(Request $request , $id)
  {
    $answerd = question::find($id);
    $answerd->answerd = $request->input('status');
     if ($answerd != null) {
    $answerd->save();
    return redirect('admin/questions/answer')->with('success' , 'question answerd successfuly');
  }
    return redirect('admin/questions/answer');
  }

  public function answerd_questions()
  {
    $Q = question::all();
    $A = answer::all();
    $A->toArray();
    return view('admin.questions.answerd', compact('Q') ,compact('A'));
  }

  public function destroy_question($id)
  {
    $question = question::find($id);
     if ($question != null) {
    $question->delete();
    return redirect('admin/questions/answer');
  }
      return redirect('admin/questions/answer');
  }

  public function destroy_question_and_answer($question_id ,$answer_id)
  {
    $question = question::find($question_id);
     if ($question != null) {
    $question->delete();
    $answer = answer::find($answer_id);
    $answer->delete();
    return redirect('admin/questions/answerd');
  }
      return redirect('admin/questions/answerd');
  }
}
