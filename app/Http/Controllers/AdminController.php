<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CV;
use App\work;
use App\post;
use Illuminate\Support\Facades\DB;

class Admincontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function nopage()
    {
      return redirect('/Dashboard');
    }

    public function getcv()
    {
      $cvdata = CV::all();
      return view('admin.admincv')->with('cvdata',$cvdata);

    }

    public function getgallarey()
    {
      $works = work::paginate(5);
      return view('admin.worksgallarey')->with('works', $works);
    }

    public function getblog()
    {
      $posts = post::all();
      $posts->toArray();
      return view('admin\blog\showposts' ,compact('posts',$posts));
    }


    public function store_cv(Request $request)
    {
      $this->validate($request,[
        'name'=>'required|string',
        'email' => 'required|email|max:255|',
        'phone'=>'required',
        'qualifications'=>'required',
        'Workexperience'=>'required',
        'Interests'=>'required',
        'birthdate'=>'nullable|date',
      ]);
        // create cv
        $cv = new CV;
        $cv->name = $request->input('name');
        $cv->nationality = $request->input('nationality');
        $cv->Socialstatus = $request->input('Socialstatus');
        $cv->birthplace = $request->input('birthplace');
        $cv->birthdate = $request->input('birthdate');
        $cv->email = $request->input('email');
        $cv->address = $request->input('address');
        $cv->phone = $request->input('phone');
        $cv->qualifications = $request->input('qualifications');
        $cv->Workexperience = $request->input('Workexperience');
        $cv->Interests = $request->input('Interests');
        $cv->created = $request->input('created');
        // save the cv
        if ($cv != null) {
          $cv->save();
          //redirect
          return redirect('/admin/cv')->with('success', 'CV Submitted successfully ^_^');
        }
          return redirect('/admin/cv');
    }

    public function update_cv(Request $request, $id)
    {
      $this->validate($request,[
        'name'=>'required|string',
        'email' => 'required|email|max:255',
        'phone'=>'required',
        'qualifications'=>'required',
        'Workexperience'=>'required',
        'Interests'=>'required',
        'birthdate'=>'nullable|date',
      ]);

      $cv = CV::find($id);

      $cv->name = $request->input('name');
      $cv->nationality = $request->input('nationality');
      $cv->Socialstatus = $request->input('Socialstatus');
      $cv->birthplace = $request->input('birthplace');
      $cv->birthdate = $request->input('birthdate');
      $cv->email = $request->input('email');
      $cv->address = $request->input('address');
      $cv->phone = $request->input('phone');
      $cv->qualifications = $request->input('qualifications');
      $cv->Workexperience = $request->input('Workexperience');
      $cv->Interests = $request->input('Interests');
      // save the edit
      if ($cv != null) {
        $cv->save();
        //redirect
        return redirect('/admin/cv')->with('success', 'CV updated');
      }
     return redirect('/admin/cv');
   }
}
