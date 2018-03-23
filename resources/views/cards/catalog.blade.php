
@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    		<h1>{{ $sort_label }}</h1>
		</div>
	</div>

	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    		<p> 
    			<span class="badge badge-pill badge-light">Light</span>
				<span class="badge badge-pill badge-dark">Dark</span>	
    		</p>
		</div>
	</div>

	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			@foreach($cardsToShow as $card)
			    	<div class="row articles">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="card-holder">	
									<div class="gallery-holder">							
										<div class="image-holder">
											@foreach($card->images as $image)
											<a href="#">
												<img src="{{ asset($image->image)  }}" alt="{{ $image->title }}" />
											</a>
											@endforeach
										</div>
									</div>
								</div>
								
								<div class="content-holder">
									<h2>{{ $card->title }}</h2>
								 	<p><strong>Adresas:</strong> {{ $card->address }}</p>
									<p><strong>Kodas / Inv.numer: </strong>{{ $card->code }}</p>
									<p><strong>Pagaminimo laikas: </strong>{{ $card->from_date }} - {{ $card->till_date }}</p>
									<p><strong>Pagaminimo vieta: {{ $card->country }}</strong></p>
									<p><strong>Medžiaga, technika:</strong>{{ $card->material }}</p>
									<p><strong>Matmenys: </strong> {{ $card->size }}</p>
									<p><strong>Aprašas: </strong> {!! $card->text !!}</p>
									<p><strong>Šaltniai ir literatūra: </strong>
									<ol start="1">
										@foreach($card->references as $reference)
											<li>{{ $reference->link }}</li>
										@endforeach
									</ol>
								</div>			
							</div>
						</div>
			@endforeach

		</div>
	</div>
@endsection