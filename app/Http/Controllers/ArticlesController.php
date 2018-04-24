<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('isAdmin', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlesToShow = Article::paginate(5);
            return view('articles.index', [
            'articles' =>  $articlesToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('articles.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedInput = $this->validateInput($request);
        $article = new Article;
        $article->create($validatedInput);  
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleToShow = Article::findOrFail($id);
            return view('articles.show', [
            'article' =>  $articleToShow,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleToEdit = Article::findOrFail($id);
             return view('articles.edit', [
            'article' => $articleToEdit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articleToUpdate = Article::findOrFail($id);
        $validatedInput = $this->validateInput($request);
        $articleToUpdate->update($validatedInput);   
       return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articleToDestroy = Article::findOrFail($id);
        $articleToDestroy->delete(); 
        return redirect()->route('articles.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
            'url' => 'required|string|max:127',
         ]);
        return $validatedInput;
    }

}