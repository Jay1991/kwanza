<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
  public function index() {

    return view('admin.post');
  }

  public function create_post() {

    return view('admin.create_post');
  }
}
