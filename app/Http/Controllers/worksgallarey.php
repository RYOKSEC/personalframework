<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\work;
use Illuminate\Support\Facades\DB;

class worksgallarey extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function Add_work()
  {
    return view('admin.worksgallarey.create');
  }

  public function store_work(Request $request)
  {
    $this->validate($request,[
      'title'=>'required',
      'picture'=>'required|max:1999|image',
      'bio'=>'required',
    ]);

      //get file name with ext
      $filenameWithExt = $request->file('picture')->getClientOriginalName();
      //just file name
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      //get extention
      $extension = $request->file('picture')->getClientOriginalExtension();
      //create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;
      //upload image
      $path = $request->file('picture')->StoreAs('public/worksgallarey' , $filenameToStore);

      //new work
      $work = new work;
      $work->title = $request->input('title');
      $work->slug = $request->input('title');
      $work->bio = $request->input('bio');
      $work->picture = $filenameToStore;
        if ($work != null) {
          $work->save();
          return redirect('/admin/worksgallarey')->with('success' , 'Work added successfully');
        }
        return redirect('/admin/worksgallarey');
  }


    public function show_work($id)
    {
      $showwork = Work::find($id);
      return view('admin.worksgallarey.showwork' , compact('showwork'));
    }



    public function edit_work($id)
    {
        $work = Work::find($id);
        return view('admin.worksgallarey.edit', compact('work'));
    }

    public function update_work(Request $request, $id)
    {
      $this->validate($request,[
        'title'=>'required',
        'bio' => 'required',
        'picture'=>'required|max:1999|image',

      ]);
      //get file name with ext
      $filenameWithExt = $request->file('picture')->getClientOriginalName();
      //just file name
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      //get extention
      $extension = $request->file('picture')->getClientOriginalExtension();
      //create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;
      //upload image
      $path = $request->file('picture')->StoreAs('public/worksgallarey' , $filenameToStore);

      $work = Work::find($id);

      $work->title = $request->input('title');
      $work->slug = $request->input('title');
      $work->bio = $request->input('bio');
      $work->picture = $filenameToStore;
      // save
      if ($work != null) {
      $work->save();
      //redirect
      return redirect('/admin/worksgallarey')->with('success', 'Work updated successfully ^__^');
    }
    return redirect('/admin/worksgallarey');
     }

     public function destroy($id)
     {
       $work = Work::find($id);
       if ($work != null) {
         $work->delete();
           return redirect('/admin/worksgallarey')->with('success', 'work Deleted *_*');
       }
        return redirect('/admin/worksgallarey');
     }
}
