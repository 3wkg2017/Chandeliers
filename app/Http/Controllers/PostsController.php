<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsToShow = Post::paginate(5);
            return view('posts.index', [
            'posts' =>  $postsToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('posts.create'); 
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
        $post = new Post;
        $post->create($validatedInput);  
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postToShow = Post::findOrFail($id);
            return view('posts.show', [
            'post' =>  $postToShow,
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
        $postToEdit = Post::findOrFail($id);
             return view('posts.edit', [
            'post' => $postToEdit,
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
        $postToUpdate = Post::findOrFail($id);
        $validatedInput = $this->validatedInput($request);
        $postToUpdate->update($validatedInput);   
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postToDestroy = Post::findOrFail($id);
        $postToDestroy->delete(); 
        return redirect()->route('posts.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
         ]);
        return $validatedInput;
    }

}