
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
		
            <div class="panel-body">
            @foreach($cards as $card)
            <a href="#">
				<div class="card mb-3">
					<div class="card-body">
						<h2>{{ $card->title }}</h2>
						@foreach($card->images as $image)
						<img style="max-width: 100px;" src="{{ asset($image->image)  }}" alt="{{ $image->title }}" />
						@endforeach
						<p><strong>Pagaminimo laikas: </strong>{{ $card->from_date }} - {{ $card->till_date }}</p>
						<p><strong>Pagaminimo vieta: {{ $card->country }}</strong></p>
						<p><strong>Medžiaga, technika:</strong>{{ $card->material }}</p>
						<p><strong>Matmenys: </strong> {{ $card->size }}</p>
					</div>	
				</div>
			</a>
			@endforeach    
        </div>
	</article>	
@endsection