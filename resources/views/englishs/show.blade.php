@extends('layouts.layout')
@section('content')
<main>
  <div class='row'>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0"></li>
                   
                        @for ($i=1; $i <3 ; $i++) 
                          <li data-target='#myCarousel' data-slide-to='{{$i}}'></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                      <div class='item active'>
                        <img src="{{ asset('img/Carousel/1.jpg') }}" alt='Sietynas'>
                      </div>
                       
                        @for($i=2; $i <4; $i++) 
                          <div class="item">
                          <img src="{{ asset('img/Carousel/'.$i.'.jpg') }}" alt='Sietynas'>
                          </div>
                        @endfor
                    
                         <h1 class="welcome-text set-left">Lithuanian chandeliers heritage</h1>
                         <h2 class="welcome-text set-center">Save fragile</h2>
                         <h3 class="welcome-text set-right" >First stage</h3>
                    
                        <div class="carousel-caption hide">
                          <h1>Historical Chandeliers in Lithuania</h1>
                        </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>

        </div>
      </div>

            @foreach($englishs as $english)
            <div class='row' id="abouts">
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