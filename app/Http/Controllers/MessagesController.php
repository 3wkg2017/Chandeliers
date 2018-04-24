<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messagesToShow = Message::paginate(5);
            return view('messages.index', [
            'messages' =>  $messagesToShow
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('messages.create'); 
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
        $Message = new Message;
        $Message->create($validatedInput);  
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $MessageToShow = Message::findOrFail($id);
            return view('messages.show', [
            'Message' =>  $MessageToShow,
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
        $MessageToEdit = Message::findOrFail($id);
             return view('messages.edit', [
            'Message' => $MessageToEdit,
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
        $MessageToUpdate = Message::findOrFail($id);
        $validatedInput = $this->validatedInput($request);
        $MessageToUpdate->update($validatedInput);   
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $MessageToDestroy = Message::findOrFail($id);
        $MessageToDestroy->delete(); 
        return redirect()->route('messages.index');
    }


public function validateInput(Request $request){
         $validatedInput = $request->validate([
            'text' => 'required|string|max:5000',
         ]);
        return $validatedInput;
    }

}