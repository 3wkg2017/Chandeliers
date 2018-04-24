<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Article;
use App\Card;
use App\Link;
use App\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
        $this->middleware('auth', ['except' => ['welcome']]);

    }



      public function welcome()
    {
        $abouts = About::all();
        $articles = Article::all();
        $posts = Post::all();
        $links = Link::all();
        return view('welcome', [
            'abouts' => $abouts,
            'posts' => $posts,
            'articles' => $articles,
            'links' => $links,
            ]);    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
