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

// -------------------------EXTRA EXAMPLES-------------------------------------------------------
// this route goes to demo.dev/hello and returns a string of just hello world 
/*

Route::get('/hello', function () {
    return 'Hello World';
});

// example of a dynamic input parameter
Route::get('/user/{id}', function($id){
    return 'this is user'.$id;
    // returns what ever you put as in the id
    // example: /user/ojboba will print out 'this is user ojboba'
    // Another example: user/22 = 'this is user 22' 
});

// example of a dynamic input with multiple parameter 
Route::get('/user/{id}/{name}', function($id,$name){
    return 'this is user'.$name.' with an id of '.$id;
    // returns what ever you put as in the id
    // example: /user/22/ojboba will print out 'this is user ojboba with an id of 22 
});

*/
// ----------------------------END----------------------------------------------------------------

// Original method to call the home page without using a contoller 
/*Route::get('/', function () {
    return view('welcome');
});
*/

// USing a controller method to load a view for homepage
// you can use a controller to write or shorten code having to be written to load pages 
Route::get('/', 'PagesController@index');
// Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


// this route goes to demo.dev/about but the view is in the pages folder so you must type
// in pages.about vs. just welcome like the first page since it is not in a folder 
Route::get('/about', function(){
    return view('pages.about');
});








