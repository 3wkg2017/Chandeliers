<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
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
        $linksToShow = Link::paginate(5);
            return view('links.index', [
            'links' =>  $linksToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('links.create'); 
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
        $link = new Link;
        $link->create($validatedInput);  
        return redirect()->route('links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linkToShow = Link::findOrFail($id);
            return view('links.show', [
            'link' =>  $linkToShow,
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
        $linkToEdit = Link::findOrFail($id);
             return view('links.edit', [
            'link' => $linkToEdit,
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
        $linkToUpdate = Link::findOrFail($id);
        $validatedInput = $this->validateInput($request);
        $linkToUpdate->update($validatedInput);   
        return redirect()->route('links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linkToDestroy = Link::findOrFail($id);
        $linkToDestroy->delete(); 
        return redirect()->route('links.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
            'url' => 'required|string|max:127',
         ]);
        return $validatedInput;
    }

}