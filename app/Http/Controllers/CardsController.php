<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Century;
use App\Region;
use App\Card;
use App\Image;
use App\Reference;
use App\Cards;
use Validator;


class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centuries = Century::all();
        $regions = Region::all();
             return view('cards.create', [
            'centuries' => $centuries,
            'regions' => $regions
        ]);
    }


  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedCard = $request->validate([
            'title' => 'required|string|max:127',
            'address' => 'required|string|max:127',
            'region' => 'required|string|max:127',
            'style' => 'required|string|max:127',
            'type' => 'required|string|max:127',
            'code' => 'required|string|max:127',
            'country' => 'required|string|max:127',
            'material' => 'required|string|max:127',
            'size' => 'required|string|max:127',
            'date' => 'required|string|max:127',
            'from_date' => 'required|string|max:127',
            'till_date' => 'required|string|max:127',
            'text' => 'required|string|max:5000',
            'file-title-0' => 'required|string|max:127',
            'file-title-1' => 'string|max:127',
            'file-title-2' => 'string|max:127',
            'file-title-3' => 'string|max:127',
            'file-title-4' => 'string|max:127',
            'file-title-5' => 'string|max:127',
            'reference-0' => 'required|string|max:127',
            'reference-1' => 'string|max:127',
            'reference-2' => 'string|max:127',
            'reference-3' => 'string|max:127',
            'reference-4' => 'string|max:127',
            'reference-5' => 'string|max:127',
        ]);

        $card = new Card;
        $card->title = $validatedCard['title'];
        $card->address = $validatedCard['address'];
        $card->region = $validatedCard['region'];
        $card->style = $validatedCard['style'];
        $card->type = $validatedCard['type'];
        $card->code = $validatedCard['code'];
        $card->country = $validatedCard['country'];
        $card->material = $validatedCard['material'];
        $card->size = $validatedCard['size'];
        $card->date = $validatedCard['date'];
        $card->from_date = $validatedCard['from_date'];
        $card->till_date = $validatedCard['till_date'];
        $card->text = $validatedCard['text'];
        $card->save();
        $lastCardId = $card->id;

      //  $path = $request->file('file-0')->storePublicly('public/dishes');
      // $path = $this->pathModificator($path, 's');


        // $image = new Image;
        // $image->card_id = $lastCardId;
        // $image->image = $validatedImage['image'];
        // $image->title = $validatedImage['title'];
        // $image->save();



        // $reference = new Reference;

        // for ($i=0; $i <= 5; $i++) { 
        //   //  if($validatedImage['reference-'.$i]!=null or $validatedImage['reference-'.$i]!='' ){
        //         $reference->card_id = $lastCardId;
        //         $reference->link = $validatedImage['reference-'.$i];
        //         $reference->save();  
        //   //  }
    




        // $image = new Image;



       // $post = $request->except('_token');
       // Cards::create($post);

        // $validatedImagesToStore  = $request->validate([
        //     'file-title-0' => 'required|string|max:1000',
        //     'file-title-1' => 'string|max:1000',
        //     'file-title-2' => 'string|max:1000',
        //     'file-title-3' => 'string|max:1000',
        //     'file-title-4' => 'string|max:1000',
        // ]);
        // $validatedReferencesToStore  = $request->validate([

        //     'reference-0' => 'required|string|max:1000',
        //     'reference-1' => 'string|max:1000',
        //     'reference-2' => 'string|max:1000',
        //     'reference-3' => 'string|max:1000',
        //     'reference-4' => 'string|max:1000',
        // ]);



       // $post = $request->except('_token');
      //  $path = $data->file('file-0')->storePublicly('public/dishes');
      //$path = $this->pathModificator($path, 's');
    
        
        //dump($validatedCard);
       // $post['dish_picture'] = $path;
       // Dishes::create($post);
        // return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function pathModificator($path, $direction){

        $path = explode('/', $path);
        if($direction == 'd'){
            $path[0] = '';
        } else {
           $path[0] = '/storage';
        }
        $path = implode('/', $path);
        return $path;
    }

}
