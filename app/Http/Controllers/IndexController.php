<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Page;

use DB;

class IndexController extends Controller
{
    public function index(){

      $posts = Post::where('published', '=', 1)->orderBy('created_at', 'desc')->paginate(10);

      // $tags = Post::select('tag')->distinct()->get();

      return view('index', compact('posts'));
    }

    public function about(){

      return view('about');
    }

    public function privacy(){

      return view('privacy');
        }

    public function contact(){

      return view('contact');
            }

    public function tag($tag){
      $posts = Post::where('tag', '=', $tag)->orderBy('created_at', 'desc')->paginate(10);

      return view('byTag', compact('posts'));
    }

  public function nextPage($id, $number){

      $pages = DB::table('posts')->join('pages', 'pages.post_id', '=', 'posts.id')->where('post_id', '=', $id)->where('number', '=', $number)->get();
      // $pages = Page::where('post_id', '=', $id)->get();
      if($pages){

        return view('page')->with('pages', $pages);
      }else{

        $posts = Post::find($id);

        return view('view_end')->with('posts',$posts);
      }
      }

    public function tags(){

    $posts = Post::where('published', '=', 1)->select('tag');

    $tags = $posts->select('tag')->distinct()->get();

    return view('partials.tags', compact('posts', 'tags'));
  }
}
