<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\English;

class EnglishsController extends Controller
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
        $englishToShow = English::paginate(5);
            return view('englishs.index', [
            'englishs' =>  $englishToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('englishs.create'); 
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
        $English = new English;
        $English->create($validatedInput);  
        return redirect()->route('englishs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $EnglishToShow = English::all();
            return view('englishs.show', [
            'englishs' =>  $EnglishToShow,
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
        $EnglishToEdit = English::findOrFail($id);
             return view('englishs.edit', [
            'english' => $EnglishToEdit,
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
        $EnglishToUpdate = English::findOrFail($id);
        $validatedInput = $this->validateInput($request);
        $EnglishToUpdate->update($validatedInput);   
        return redirect()->route('englishs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EnglishToDestroy = English::findOrFail($id);
        $EnglishToDestroy->delete(); 
        return redirect()->route('englishs.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
         ]);
        return $validatedInput;
    }

}