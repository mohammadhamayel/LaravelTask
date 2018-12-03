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
/*
  Schema::create('posts', function($mytable){
    $mytable ->string('description',1000);
    $mytable ->timestamps();
  });
  Schema::table('posts', function($mytable){
    $mytable ->increments('id');
  });

  Schema::create('files', function($mytable){
    $mytable ->increments('id');
    $mytable ->string('description',1000);
    $mytable ->string('name',1000);
    $mytable ->timestamps();
  });
*/
  
  return view('welcome');
});



Route::get('/Posts', function () {
    Auth::logout();
    return view('Posts');
});

/*Route::post('/Posts', function () {

    if (Input::get('post') != null) {
      $command = new App\Post;
      $command->description = Input::get('post');
      $command->save();
    }
    

    return view('Posts');
});
 */

Route::get('categories', function () {
    // Only authenticated users may enter...
       return view('categories');
});



/*Route::get('/uploadfile', 'uploadFileController@index');
Route::post('uploadfile', 'uploadFileController@upload');*/

Route::resource('category','uploadFileController');

 
Route::resource('post','postController');