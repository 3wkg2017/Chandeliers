<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutsToShow = About::paginate(5);
            return view('abouts.index', [
            'abouts' =>  $aboutsToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('abouts.create'); 
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
        $about = new About;
        $about->create($validatedInput);  
        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutToShow = About::findOrFail($id);
            return view('abouts.show', [
            'about' =>  $aboutToShow,
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
        $aboutToEdit = About::findOrFail($id);
             return view('abouts.edit', [
            'about' => $aboutToEdit,
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
        $aboutToUpdate = About::findOrFail($id);
        $validatedInput = $this->validatedInput($request);
        $aboutToUpdate->update($validatedInput);   
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutToDestroy = About::findOrFail($id);
        $aboutToDestroy->delete(); 
        return redirect()->route('abouts.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
         ]);
        return $validatedInput;
    }

}