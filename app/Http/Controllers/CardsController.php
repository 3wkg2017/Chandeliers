<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Century;
use App\Region;
use App\Card;
use App\Image;
use App\Reference;
use Validator;
use File;



class CardsController extends Controller
{
    
      public function __construct()
    {
        $this->middleware('isAdmin', ['except' => ['catalog', 'show', 'imageviewer']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {   
     //  dd($request);

        // if($request->input('cardSearch')!=""){
        //     $validatedSearch = $request->validate([
        //     'cardSearch' => 'required|string|max:127',
        //     ]);

        //     dump($validatedSearch['cardSearch']);

            //  $cards = Card::where('title', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('address', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('region', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('style', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('type', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('code', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('country', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('material', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('size', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('date', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('from_date', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('till_date', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->orWhere('text', 'like', '%' .  $validatedSearch['cardSearch'] . '%')->get();

            // return view('cards.index', [
            // 'cards' => $cards->paginate(10)
            // ]);  
        // }
        // else{
            $cards = new Card;
            return view('cards.index', [
            'cards' => $cards->paginate(10)
            ]);    
      //  }

        
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


        $validatedCard = $this->validateCard($request);
        $card = new Card;
        $lastCardId = $card->create($validatedCard)->id;  
      

      for ($i=0; $i <= 5; $i++){ 

        if(isset($validatedCard['file-'.$i])){
            if($validatedCard['file-'.$i]!=null or $validatedCard['file-title-'.$i]!=null){
                $image = new Image;
                $image->card_id = $lastCardId;
                $path = $request->file('file-'.$i)->storePublicly('public');
                $path = $this->pathModificator($path, 's');
                $image->image = $path;
                $image->title = $validatedCard['file-title-'.$i];
                $image->save();  
                $image = null;
           }
        }
   
            if($validatedCard['reference-'.$i]!=null or $validatedCard['reference-'.$i]!='' ){
                $reference = new Reference;
                $reference->card_id = $lastCardId;
                $reference->link = $validatedCard['reference-'.$i];
                $reference->save();  
            $reference = null;
           }
     }
        return redirect()->route('cards.index');

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cardToShow = Card::findOrFail($id);
            return view('cards.show', [
            'card' =>  $cardToShow,
        ]);
    }

 public function imageviewer($image)
    {
            $imageToShow = Image::findOrFail($image); 
            return view('cards.imageviewer', [
                 'image' => $imageToShow, 
             ]);

    }


    public function catalog($sort_type)
    {

    $sort_label = "";
    $sort_badges = null;
    $cardsToShow = null;
    $criteria = null;

        switch ($sort_type) {
            case '0': 
                $sort_label = "Pagal pagaminimo laiką";
                $criteria = 'date';
            break;
            case '1':
                 $sort_label = "Pagal stilių";
                 $criteria = 'style';
            break;
            case '2':
                 $sort_label = "Pagal tipologiją";
                 $criteria = 'type';
            break;
            case '3':
                 $sort_label = "Pagal medžiagas";
                 $criteria = 'material';
            break;
            case '4':
                 $sort_label = "Pagal pagaminimo šalį";
                 $criteria = 'country';
            break;
            case '5':
                 $sort_label = "Sunykę sietynai";
                 $criteria = 'country';
            break;
                   
            default:
                $cardsToShow = Card::all()->paginate(6);
                $sort_label = "Visi iš eilės";
            break;
        }

            $cardsToShow = Card::orderBy($criteria, 'desc')->paginate(6);
            $badges = Card::select($criteria)->distinct()->get(); 
            $badgesCount = Card::select($criteria)->distinct()->count();
            $badges[0] = $badges[0][$criteria];
            $badges[1] = $badgesCount;

            return view('cards.catalog', [
                'cards' =>  $cardsToShow,
                'sort_label' =>  $sort_label,
                'badges' => $badges
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
        $cardToEdit = Card::findOrFail($id);
        $centuries = Century::all();
        $regions = Region::all();
             return view('cards.edit', [
            'card' => $cardToEdit,
            'centuries' => $centuries,
            'regions' => $regions
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
        $cardToUpdate = Card::findOrFail($id);
        
     

        $validatedCard = $this->validateCard($request);
        $cardToUpdate->update($validatedCard);   
        $cardToUpdate->references()->update();
        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cardToDestroy = Card::findOrFail($id);
      foreach($cardToDestroy->images as $image){
        $path = $image['image'];
        $path = $this->pathModificator($path, 'd');
     
        Storage::delete($path);
       }
      $cardToDestroy->delete(); 
     return redirect()->route('cards.index');

    }


    public function pathModificator($path, $direction){
        $path = explode('/', $path);
        if($direction == 'd'){
            $path[0] = 'public';
            
        } else {
           $path[0] = 'storage';
        }
        $path = implode('/', $path);
        return $path;
    }


    public function validateCard(Request $request){
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
            'file-0' => 'required|image|max:5120',
            'file-1' => 'nullable|image|max:127',
            'file-2' => 'nullable|image|max:127',
            'file-3' => 'nullable|image|max:127',
            'file-4' => 'nullable|image|max:127',
            'file-5' => 'nullable|image|max:127',
            'file-title-0' => 'required|string|max:127',
            'file-title-1' => 'nullable|string|max:127',
            'file-title-2' => 'nullable|string|max:127',
            'file-title-3' => 'nullable|string|max:127',
            'file-title-4' => 'nullable|string|max:127',
            'file-title-5' => 'nullable|string|max:127',
            'reference-0' => 'required|string|max:256',
            'reference-1' => 'nullable|string|max:256',
            'reference-2' => 'nullable|string|max:256',
            'reference-3' => 'nullable|string|max:256',
            'reference-4' => 'nullable|string|max:256',
            'reference-5' => 'nullable|string|max:256',
        ]);
        return $validatedCard;
    }

}
