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

Route::get('admin', 'AdminController@index');

Route::get('admin/create_post', 'AdminController@showCreatePost');

Route::post('admin/storePost', 'AdminController@storePost');

Route::get('admin/showAddMediaToPost', 'AdminController@showAddMediaToPost');

Route::post('admin/AddMediaToPost/{id}', 'AdminController@AddMediaToPost');

Route::post('admin/addPost', 'AdminController@addPost');

Route::get('admin/showPost', 'AdminController@showPost');

Route::get('admin/editPage/{id}', 'AdminController@editPage');

Route::post('admin/storeEditedPage/{id}', 'AdminController@storeEditedPage');

Route::get('admin/showPage/{id}', 'AdminController@showPage');

Route::get('admin/addPage/{id}', 'AdminController@addPage');

Route::post('admin/storePage/{id}', 'AdminController@storePage');

Route::get('admin/editPost/{id}', 'AdminController@editPost');

Route::post('admin/storeEditedPost/{id}', 'AdminController@storeEditedPost');

Route::get('admin/deletePage/{id}', 'AdminController@deletePage');

Route::get('admin/deletePost/{id}', 'AdminController@deletePost');

Route::get('admin/notPublished', 'AdminController@notPublished');

Route::get('admin/publish/{id}', 'AdminController@publish');

Route::get('admin/published', 'AdminController@published');

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
