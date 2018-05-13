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
                    
                         <h1 class="welcome-text set-left">Sietynų paveldas Lietuvoje</h1>
                         <h2 class="welcome-text set-center">išsaugokim trapumą</h2>
                         <h3 class="welcome-text set-right" >Pirmas etapas</h3>
                    
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

      <!--       @foreach($posts as $post)
            <div class='row' id="posts">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <p>{!! $post->text !!}</p>
                   </div>
                 </div>
              </div>
            </div>
            @endforeach -->
 
 
            @foreach($abouts as $about)
            <div class='row' id="abouts">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <p>{!! $about->text !!}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Straipsniai</h3>
                </div>
              <div class="panel panel-default">
            @foreach($articles as $article)

           <div class='row' id="articles">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel-body">
                      <a href="{{ asset($article->url) }}"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i></a>
                     <p>{!!$article->text!!}</p> 
                    </div>
                  </div>
              </div>
           @endforeach
           </div>
            </div>
               
          
          


          @foreach($links as $link)
          <div class='row' id="links">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <p>{!! $link->text !!}<a href="{{ $link->url }}"><i class="fa fa-external-link"></i></a></p>

                </div>
              </div>
            </div>
          </div>
          @endforeach

</main>


 
      
  

@endsection