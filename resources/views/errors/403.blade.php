@extends('layouts.app')
@section('content')
		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
			  		<div class="panel-heading">
			  			<h3>Perspėjimas</h3>
			  		</div>
			  		<div class="panel-body">
						<p>Prieiga  negalima. Būtina prisijungti <a href=" {{ route('login') }} "><button class="btn btn-primary">Prisijungti</button></a></p>			  		
					</div>
	 			</div>
	   		</div>
		</div>
	@endsection
