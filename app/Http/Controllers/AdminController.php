<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Page;

use DB;

use Validator, Input, Redirect;

use Illuminate\Support\Str;

class AdminController extends Controller
{
  public function index() {

    return view('admin.post');
  }

  public function show(){

    $all = Post::all();
    $posts = $all -> last();

    // return View::make('admin.create_post', $posts);

    return view('admin.create_post')->with('posts', $posts);
  }

  public function showCreatePost(){

    return view('admin.page');
  }

  public function storePost(Post $post, Request $request) {

    // $formData = $request -> all();

    // $rules = array(
    //
    //   'title' => 'required|max:65000',
    //   'tag' => 'required|max:65000',
    //   'summary' => 'required|max:65000',
    //   'media' => 'required|image',
    //   'media_source' => 'required|max:65000'
    //
    // );

    // $validator = Validator::make($formData, $rules);
    //
    // if($validator -> fails()){
    //   // return with data
    //   // return view('admin.create_post')->withErrors($validator);
    //   return Redirect::to('/');
    //
    //
    // }
    // else {
    //   // save to database

      // save media directory
      // $media = $request ->file('media');
      // $newFileName = Str::random(32).'.'.$media->guessExtension();
      // $media -> move('public/img',$newFileName);
      // $post -> media = $newFileName;

      $post -> tag = $request -> get('tag');
      $post -> title = $request -> get('title');
      $post -> summary = $request -> get('summary');
      // $post -> media_source = Input::get('media_source');

      $post -> save();

      return Redirect::to('admin/showAddMediaToPost');

    // }
  }


  public function showAddMediaToPost(){

    $all = Post::all();
    $posts = $all -> last();

    return view('admin.addMediaToPost')->with('posts', $posts);
  }

    public function addMediaToPost($id, Request $request){

      $formData = $request->all('media');

      // var_dump($post_id);

      // $all = Post::all();
      // $post = $all -> last();

      //
      // var_dump($id);
      //
      $rules = array(

        'media' => 'required|image|mimes:png,jpg,jpeg,gif,bmp',
      );

      $validator = Validator::make($formData, $rules);

      if($validator -> fails()){
        Session::flash('message','not a media');

      }
      else{

        // save media directory
        $media_source = $request -> input('media_source');
        $media = $request ->file('media');
        // $newFileName =  Str::random(32) . '.'.$media->getClientOriginalName();
        $newFileName = Str::random(32) . '.'.$media->guessExtension();
        $media -> move('media', $newFileName);

        $all = Post::all();
        $post = $all->last();

        $post -> media = $newFileName;
        $post -> media_source = $media_source;
        $post -> save();

        // Post::where('id', '=', $id)->update(['media'=>$media]);
        // $post = Post::where('post_id', '=', $post_id)->get();

        // return Redirect::to('admin/showPost{id}');
        return back();

      }


    }

    public function showPost(){

      $posts = Post::all();

      return view('admin.showPost')->with('posts', $posts);
    }

  public function addPost(Page $page, Post $post, Request $request){

    // $formData = $request -> all();
    // $rules = array(
    //
    //     'title' => 'required|max:65000',
    //     'number' => 'required|integer',
    //     'page_title' => 'required|max:65000',
    //     'contents' => 'required|max:65000'
    //     // 'media' => 'required|image|mimes:png,jpg,jpeg,gif,bmp',
    //     // 'media_source' => 'required|max:65000'
    // );

    // $validator = Validator::make($formData, $rules);
    //
    // if($validator ->fails()){
    //   // return to page with data
    //   return view('admin.page')->withErrors($validator);
    // }else {

      // set dir for media
      // $media = $request ->file('media');
      // $newFileName = Str::random(32) . '.'.$media->guessExtension();
      // $media -> move('media', $newFileName);

      // save media directory
      $media_source = $request -> input('media_sourcePost');
      $media = $request ->file('mediaPost');
      $newFileName = Str::random(32) . '.'.$media->guessExtension();
      $media -> move('media', $newFileName);


      // save post
      $post -> tag = $request -> get('tag');
      $post -> title = $request -> get('titlePost');
      $post -> summary = $request -> get('summary');
      $post -> media = $newFileName;
      $post -> media_source = $media_source;
      $post -> save();

      // save media directory
      $media_source = $request -> input('media_sourcePage');
      $media = $request ->file('mediaPage');
      $newFileNamePage = Str::random(32) . '.'.$media->guessExtension();
      $media -> move('media', $newFileNamePage);


      // save page
      $page -> number = $request -> get('number');
      $page -> page_title = $request -> get('page_title');
      $page -> contents = $request -> get('contents');
      $page -> media = $newFileNamePage;
      $page -> media_source = $media_source;
      $page -> post() -> associate($post);
      $page -> save();


      // $page -> post_id = 1;
      // $page -> media = $newFileName;
      // $page -> media_source = $request -> get('media_source');

      // attach fk here

      return back();

    // }

  }

  public function editPage($id){

    $post = Post::find($id);

    return view('admin.editPage')->with('posts', $post);
  }

  public function storeEditedPage($id, Request $request){

  // validate input data
  $post = Post::find($id);

  // save media directory
  $media_source = $request -> input('media_sourcePost');
  $media = $request ->file('mediaPost');
  $newFileName = Str::random(32).'.'.$media->guessExtension();
  $media -> move('media', $newFileName);

  // save post
  $post -> tag = $request -> get('tag');
  $post -> title = $request -> get('titlePost');
  $post -> summary = $request -> get('summary');
  $post -> media = $newFileName;
  $post -> media_source = $media_source;
  $post -> save();

  return back();
  }

  public function showPage($id){

    $pages = DB::table('posts')->join('pages', 'pages.post_id', '=', 'posts.id')->where('post_id', '=', $id)->orderBy('number')->get();

    return view('admin.viewPage')->with('pages', $pages);
  }

  public function addPage($id){

    $pages = Page::find($id);

    return view('admin.addPage')->with('pages', $pages);
  }

  public function storePage($id,Post $post, Request $request){

    $page = Page::find($id);

    $post_id = $page -> post_id;

    // $post = Post::find($post_id);

    // save media directory
    $media_source = $request -> input('media_sourcePage');
    $media = $request ->file('mediaPage');
    $newFileNamePage = Str::random(32) . '.'.$media->guessExtension();
    $media -> move('media', $newFileNamePage);

    $newPage = new Page();

    // save page
    $newPage -> number = $request -> get('number');
    $newPage -> page_title = $request -> get('page_title');
    $newPage -> contents = $request -> get('contents');
    $newPage -> media = $newFileNamePage;
    $newPage -> media_source = $media_source;
    $newPage -> post_id = $post_id;
    $newPage -> save();

    return back();

  }

  // edit page
  public function editPost($id){

    $page = Page::find($id);

    return view('admin.editPost')->with('pages', $page);
  }

  public function storeEditedPost($id, Request $request){

    // validate input here

    // save media directory
    $media_source = $request -> input('media_sourcePage');
    $media = $request ->file('mediaPage');
    $newFileName = Str::random(32) . '.'.$media->guessExtension();
    $media -> move('media', $newFileName);

    // save page
    $page = Page::find($id);

    $page -> number = $request -> get('number');
    $page -> page_title = $request -> get('page_title');
    $page -> contents = $request -> get('contents');
    $page -> media = $newFileName;
    $page -> media_source = $media_source;
    $page -> save();

    // its good if it return to page lists
    return back();
  }

  public function deletePage($id){

    $page = Page::find($id);

    $page -> delete();

    return back();
  }

  public function deletePost($id){

    $post = Post::find($id);

    $post -> delete();

    return back();
  }

  public function notPublished(){

      $posts = Post::where('published', '=', 0)->get();

      return view('admin.notPublished')->with('posts', $posts);
  }

  public function publish($id){

    $post = Post::find($id);

    $post->published = 1;

    $post->save();

    return back();
  }

  public function published(){

    $posts = Post::where('published', '=', 1)->get();

    return view('admin.published')->with('posts', $posts);
  }

}
