<?php

namespace App\Http\Controllers;
use App\About;
use App\Post;
use App\Article;
use App\Link;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
    
       $abouts = About::paginate(5);
       $posts = Post::paginate(5);
       $articles = Article::paginate(5);
       $links = Link::paginate(5);

       

       return view('welcome', [
           'abouts' => $abouts,
           'posts' => $posts,
           'articles' => $articles,
           'links' => $links
       ]);
    
    }

      public function index()
    {
        return view('home');
    }

       public function english()
    {
        return view('english');
    }
}
