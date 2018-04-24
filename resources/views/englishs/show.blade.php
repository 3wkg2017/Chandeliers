
@extends('layouts.app')
@section('content')
<main class='row'>
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		   <div class="mainImageContainer">
		      <img src="{{ asset('img/Carousel/1.jpg') }}" alt='Chandelier' class="home-image">  
		   </div>
		 </div>

		<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<div class="content-holder">
					<h1>Welcome to Lithuanian Chandeliers heritage web page</h1>
				</div>
			</div>
		</div>



			@foreach($englishs as $english)
            <div class='row'>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <p>{!! $english->text !!}</p>
                   </div>
                 </div>
              </div>
            </div>
            @endforeach


</main>
@endsection
