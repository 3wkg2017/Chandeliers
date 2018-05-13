
@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
                <div class="panel-body">
    		<h1>{{ $sort_label }}</h1>
		</div>
	</div>
	<article>	
		<div class="panel panel-default">
            <div class="panel-body catalog-container">
            @foreach($cards as $card)
            <a href="{{ route('cards.show', $card->id) }}">
				<div class="card mb-3">
					<div class="card-body">
						<h3>{{ $card->title }}</h3>
						<img class="catalog" style="max-width: 250px" src="{{ asset($card->images[0]->image)  }}" alt="{{ $card->images[0]->title }}" />
						<p><strong>Pagaminimo laikas: </strong>{{ $card->from_date }} - {{ $card->till_date }}</p>
						<p><strong>Pagaminimo vieta:</strong> {{ $card->country }}</p>
					
					</div>	
				</div>
			</a>
			@endforeach    
			  @foreach($cards as $card)
            <a href="{{ route('cards.show', $card->id) }}">
				<div class="card mb-3">
					<div class="card-body">
						<h2>{{ $card->title }}</h2>
						<img class="catalog" style="max-width: 250px" src="{{ asset($card->images[0]->image)  }}" alt="{{ $card->images[0]->title }}" />
						<p><strong>Pagaminimo laikas: </strong>{{ $card->from_date }} - {{ $card->till_date }}</p>
						<p><strong>Pagaminimo vieta:</strong> {{ $card->country }}</p>
					
					</div>	
				</div>
			</a>
			@endforeach    
			  @foreach($cards as $card)
            <a href="{{ route('cards.show', $card->id) }}">
				<div class="card mb-3">
					<div class="card-body">
						<h2>{{ $card->title }}</h2>
						<img class="catalog" style="max-width: 250px" src="{{ asset($card->images[0]->image)  }}" alt="{{ $card->images[0]->title }}" />
						<p><strong>Pagaminimo laikas: </strong>{{ $card->from_date }} - {{ $card->till_date }}</p>
						<p><strong>Pagaminimo vieta:</strong> {{ $card->country }}</p>
					
					</div>	
				</div>
			</a>
			@endforeach    
        </div>
	</article>	
@endsection