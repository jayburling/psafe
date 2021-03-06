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

Route::get('/', function () {
    return Socialite::with('azure')->redirect();
});
Route::get('/admin', function () {
    return view('Welcome');
});

Route::get('/placeholderLogin', function () {
    return view('placeholderLoginRedirection');
});

Route::get('/testPage', function () {
    return view('testPage');
});

Route::get('/survey', 'SurveyController@survey');

Route::get('/teacher/{id}', 'SurveyController@setTeacherID');

Route::post('/survey', 'SurveyController@submit');

Route::get('/dataLoader', function(){
  return view("dataLoader");
});

Route::get('/testLogin', function(){
  return view("testLogin");
});

Route::get('/testing', function(){
  return view("testing");
});

Route::get('/teacherLayout', function(){
  return view("teacherLayout");
});

Route::get('/editQuestions', "FetchData@editQuestions");

Route::get('/actualSurvey', function(){
  return view("actualSurvey");
});

Route::get('/viewReport', function(){
  return view("viewReport");
});

Route::get('/editDomains',"FetchData@activeDomains");

Route::get('/graph', "FetchData@domains");

Route::get('/graph/{id}', "FetchData@graph");

Route::get('/loadData',"FetchData@load");

Route::get('/updateDomains',"dataUpdater@updateDomains");

Route::get('/generateReport', 'ReportGenerator@generateRecent');

Route::get('/generateReport/{span}','ReportGenerator@generateReport');

Route::get('/updateDatabase', function(){
  return view("updateDatabase");
});

Route::post('/uploadData','UploadData@data');

Route::get('/uploadData','UploadData@index');

Route::get('/login','Login@user');

Route::get('/sha256',function(){return view("sha");});

Route::get('/noAccount',function(){return view("noAccount");});

Route::get('/adminAccess',function(){return view("adminAccess");});

Route::get('/signOut',function(){return redirect("https://login.microsoftonline.com/common/oauth2/logout?");});
