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

Route::get('/people', function () {
	$people = ['Taylor', 'Matt', 'Jeffrey', 'Jo-Bob', 'Pilgrim'];

	#return view('pages.people')->withPeople($people);
	return view('pages.people', compact('people'));
});
/*Route::get('/', function () {
    return view('welcome');
    //return 'Howdy pilgrim';
});*/
Route::get('/', function () {
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function() {
	Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle', 'as' => 'blog.single']);
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('/', 'PagesController@home');
	Route::get('about', 'PagesController@about');
	Route::get('contact', 'PagesController@contact');
	Route::get('cards', 'CardsController@index');
	Route::resource('posts', 'PostController');
});	

