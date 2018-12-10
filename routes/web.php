<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
//admin routes
Route::get('/Dashboard', 'Admincontroller@index');

Route::get('/admin/cv','Admincontroller@getcv');

Route::get('/admin/worksgallarey','Admincontroller@getgallarey');

Route::get('/admin/blog','Admincontroller@getblog');


//guest routes

Route::get('/', 'Guestcontroller@gethome');

Route::get('/worksgallarey' ,'Guestcontroller@getgallarey');

Route::get('/worksgallarey/workshowcase/{id}/{slug}', 'Guestcontroller@showcase');

Route::get('/questions/answerd' ,'GuestQuestionsController@answerdquestions');

Route::get('/questions/ask' ,'GuestQuestionsController@askquestions');

Route::post('/guest/store/question' ,'GuestQuestionsController@store_question');

Route::get('/blog', 'Guestcontroller@getblog');



//CRUD routes

//cv
Route::post('/admin/store/cv','Admincontroller@store_cv');

Route::match(['put', 'patch'], '/admin/update/cv/{id}','Admincontroller@update_cv');

//worksgallarey
Route::get('/admin/worksgallarey/create','worksgallarey@Add_work');

Route::post('/admin/store/work','worksgallarey@store_work');

Route::get('/admin/worksgallarey/workshowcase/{id}','worksgallarey@show_work');


Route::get('/admin/worksgallarey/edit/{id}','worksgallarey@edit_work');

Route::match(['put', 'patch'], '/admin/update/work/{id}','worksgallarey@update_work');

Route::DELETE('/destroy/work/{id}','worksgallarey@destroy');

//questions
Route::get('/admin/questions/answer' ,'AdminQuestionsController@showquestions');

Route::get('/admin/questions/answerd' ,'AdminQuestionsController@answerd_questions');

Route::get('/admin/questions/answer/{id}','AdminQuestionsController@asnwerquestion');

Route::match(['put', 'patch'], '/admin/questions/answer/{id}','AdminQuestionsController@plus1');

Route::post('/admin/store/answer/{id}','AdminQuestionsController@store_answer');

Route::DELETE('/destroy/question/{id}','AdminQuestionsController@destroy_question');

Route::get('/destroy/question/answer/{question_id}/{answer_id}','AdminQuestionsController@destroy_question_and_answer');

//blog
Route::get('/admin/blog/create' , 'Admin_blog_controller@create');

Route::post('/admin/store/post' , 'Admin_blog_controller@store');

Route::DELETE('/destroy/post/{id}' , 'Admin_blog_controller@destroy_post');

Route::match(['put', 'patch'], '/admin/update/post/{id}','Admin_blog_controller@update');

Route::get('/admin/blog/edit/{id}' , 'Admin_blog_controller@edit');

//declare

Route::get('/admin/blog/post/{id}' , 'Admin_blog_controller@show_post');


//search function
Route::any('/search', 'guest_blog_search@search');
