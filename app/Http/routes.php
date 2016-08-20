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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/view_end', function () {
    return view('view_end');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('admin', 'AdminController@index');

Route::get('admin/create_post', 'AdminController@create_post');

Route::get('/link', function(){

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
