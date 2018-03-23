
@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Pavadinimas</th>
			      <th scope="col">Adresas</th>
			      <th scope="col">Regionas</i></th>
				  <th scope="col">Stilius</i></th>
				  <th scope="col">Tipas</i></th>
				  <th scope="col">Kodas / Inv. Nr.</i></th>
				  <th scope="col">Šalis</i></th>
				  <th scope="col">Medžiaga</i></th>
				  <th scope="col">Išmatavimai</i></th>
				  <th scope="col">Data</i></th>
				  <th scope="col">Laikotarpis nuo</i></th>
			      <th scope="col">Laikotarpis iki</i></th>
				  <th scope="col">Atverti</th>
				  <th scope="col">Redaguoti</th>
				  <th scope="col">Šalinti</th>
			    </tr>
			  </thead>
			  <tbody>
				@foreach($cards as $card)
			    <tr>
			      <td>{{ $card->title }}</td>
			      <td>{{ $card->address }}</td>
			      <td>{{ $card->region }}</td>
			      <td>{{ $card->style }}</td>
			      <td>{{ $card->type }}</td>
			      <td>{{ $card->code }}</td>
			      <td>{{ $card->country }}</td>
			      <td>{{ $card->material }}</td>
			      <td>{{ $card->size }}</td>
			      <td>{{ $card->date }}</td>
			      <td>{{ $card->from_date }}</td>
			      <td>{{ $card->till_date }}</td>
			      <td scope="col">
				  	  		<form action="{{ route('cards.show', $card->id) }}" method="get" >
								{{ csrf_field() }}
								<button class="no-style"><i class="fa fa-external-link" style="color:blue"></i></button>
							</form>
				</td>
				  <td scope="col">
				  		<form action="{{ route('cards.edit', $card) }}" method="get" >
								{{ csrf_field() }}
							    <button class="no-style"><i class="fa fa-edit" style="color:green"></i></button>
						</form>
				  </td>
				  <td scope="col">
			      		<form action="{{ route('cards.destroy', $card) }}" method="post" >
								{{ method_field('DELETE') }}
							    {{ csrf_field() }}
							    <button class="no-style"><i class="fa fa-remove" style="color:red"></i></button>
						</form>
			      </td>

			    </tr>
				@endforeach
			  </tbody>
			</table>
     	{{ $cards->render() }}
   </div>
 </div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	<div>
		<form action="{{ route('cards.index') }}" method="post" >
			{{ csrf_field() }}
		        <div class="form-group{{ $errors->has('cardSearch') ? ' has-error' : '' }}">
                            <label for="cardSearch" class="col-md-4 control-label">Ieškoti</label>
                            <div class="col-md-6">
                                <input id="cardSearch" type="text" class="form-control" name="cardSearch" value="{{ old('cardSearch') }}" required autofocus>
                                @if ($errors->has('cardSearch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cardSearch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
		<button class="no-style" type="submit"><i class="fa fa-search" style="color:blue"></i></button>
		</form>
	</div>

    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<a href="{{ route('cards.create') }}"><button class="btn btn-primary">Nauja kortelė</button>    	
    </div>
	
     </div>
 
@endsection
