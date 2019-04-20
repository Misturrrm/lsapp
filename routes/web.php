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


/*
//Route::get('/hello', function () {
    //return view('welcome');
  //  return "<h1>Hello World</h1>";
});
Route::get('/users/{id}/{name}', function($id,$name) {
    return 'This is user ' .$name. ' with id ' .$id;
});
Route::get('/about', function () {
    return view('pages.about');
});
*/



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contact','PagesController@contact');

Route::resource('posts', 'PostsController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/admin', 'AdminsController@index')->name('home');
Route::resource('catalogues', 'CataloguesController');
Route::resource('departments', 'DepartmentsController');

Route::resource('grades','GradesController');

Route::resource('courses','CoursesController');
Route::resource('users', 'UsersController');
//Route::get('/gpacalculator','UsersController@gpacalculator');
Route::get('/gpa', function() {
    return File::get(public_path() . '/gpa/gpacalculator.html');
  });
Route::get('/catalogues/2014/Computer Science','CoursesController@cs2014');
Route::get('/catalogues/2014/Software Engineering','CoursesController@se2014');
Route::get('/catalogues/2014/Information Systems', 'CoursesController@is2014');
Route::get('/catalogues/2014/Computer Science/Study Guide','CoursesController@csstudyguide2014');
Route::get('/catalogues/2014/Computer Science/Requirements','CoursesController@csrequirements2014');
Route::get('/userdetails/studentdetails','UsersController@studentdetails');
Route::get('/viewgrades','GradesController@viewgrades');
Route::get('/studentrecords', 'GradesController@studentrecords');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminsController@index')->name('admin.dashboard');
});

Route::get('/verify/{token}', 'VerifyControler@verify')->name('verify');
//Route::prefix('admin')->group() function () {  
  //  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    //Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  //  Route::get('/', 'AdminsController@index')->name('admin.dashboard');
//}]);


// Inserting into Database
//Route::get("create",'CataloguesController@create');
//Route::post("store", 'CataloguesController@store');



