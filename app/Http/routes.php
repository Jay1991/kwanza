<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('about', 'IndexController@about');

Route::get('privacy', 'IndexController@privacy');

Route::get('contact', 'IndexController@contact');

Route::get('tag/{tag}', 'IndexController@tag');

Route::get('post/{id}/nextPage/{number}', 'IndexController@nextPage');

Route::get('/view_end', function () {
    return view('view_end');
});

Route::auth();

Route::get('home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function(){

  Route::get('/', 'AdminController@index');

  Route::get('create_post', 'AdminController@showCreatePost');

  Route::post('storePost', 'AdminController@storePost');

  Route::get('showAddMediaToPost', 'AdminController@showAddMediaToPost');

  Route::post('AddMediaToPost/{id}', 'AdminController@AddMediaToPost');

  Route::post('addPost', 'AdminController@addPost');

  Route::get('showPost', 'AdminController@showPost');

  Route::get('editPage/{id}', 'AdminController@editPage');

  Route::post('storeEditedPage/{id}', 'AdminController@storeEditedPage');

  Route::get('showPage/{id}', 'AdminController@showPage');

  Route::get('addPage/{id}', 'AdminController@addPage');

  Route::post('storePage/{id}', 'AdminController@storePage');

  Route::get('editPost/{id}', 'AdminController@editPost');

  Route::post('storeEditedPost/{id}', 'AdminController@storeEditedPost');

  Route::get('deletePage/{id}', 'AdminController@deletePage');

  Route::get('deletePost/{id}', 'AdminController@deletePost');

  Route::get('notPublished', 'AdminController@notPublished');

  Route::get('publish/{id}', 'AdminController@publish');

  Route::get('published', 'AdminController@published');

});

Route::get('link', function(){

  $data['tasks'] = [
    [
    'name' => 'Design New Dashboard',
    'progress' => '87',
    'color' => 'danger'
        ],
        [
    'name' => 'Create Home Page',
    'progress' => '76',
    'color' => 'warning'
        ],
        [
    'name' => 'Some Other Task',
    'progress' => '32',
    'color' => 'success'
        ],
        [
    'name' => 'Start Building Website',
    'progress' => '56',
    'color' => 'info'
        ],
        [
    'name' => 'Develop an Awesome Algorithm',
    'progress' => '10',
    'color' => 'success'
    ]
  ];

  return view('admin.test')->with($data);
});
