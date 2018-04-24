@if(Auth::check() && Auth::user()->user_type == 'admin')
	@extends('layouts.app')
	@section('content')
		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    		<div class="row articles">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											
						<div class="content-holder">
							<p><strong>Aprašas: </strong> {!! $about->text !!}</p>
						</div>			
					</div>
				</div>
			</div>
		</div>
	@endsection
@endif