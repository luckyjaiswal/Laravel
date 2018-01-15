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

/*Route::get('/', function () {
    return view('createsController@getStudent');
});*/

//Route :: get('/','createsController@getStudent');
Route :: get('/addstudent','createsController@addStudent');
Route :: post('/stuAdd','createsController@addStu');
Route :: get('/editStudent/{id}','createsController@editStu');
Route :: post('/stuEdited/{id}','createsController@stuEdtted');
Route :: get('/delteStudent/{id}','createsController@stuDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registered', 'UserController@registractioForm')->name('registractioForm');
Route::post('/registered', 'UserController@registraction')->name('registraction');
Route::get('/loginForm','UserController@loginForm')->name('loginForm');
Route::post('/loginForm','UserController@login')->name('login');
Route::get('/logout','UserController@logout');
Route::get('/categoryAdd','UserController@categoryAdd');
Route::post('/categoryAdd','UserController@categoryAdded');

Route::get('/teacherAdd','UserController@teacherAdd');
Route::post('/teacherAdded','UserController@teacherAdded');

/*

 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                */