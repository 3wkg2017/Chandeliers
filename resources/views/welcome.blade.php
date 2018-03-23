@extends('layouts.layout')
@section('content')
<main>
  <div class='row'>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="mainImageContainer">
      <img src="{{ asset('img/Carousel/1.jpg') }}" alt='Sietynas' class="home-image">  
   </div>
 </div>

 @foreach($posts as $post)
 <div class='row'>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="posy">
      <p>{{$post->text}}</p>
   </div>
 </div>
 @endforeach
 {{ $posts->render() }}

 @foreach($abouts as $about)
 <div class='row'>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="about">
      <p>{{ $about->text}}</p>
   </div>
 </div>
 @endforeach
  {{ $abouts->render() }}

 @foreach($articles as $article)
 <div class='row'>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="about">
      <p>{{$article->text}}</p>
   </div>
 </div>
 @endforeach
   {{ $articles->render() }}

 @foreach($links as $link)
 <div class='row'>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="about">
      <p>{{$link->text}}</p>
   </div>
 </div>
 @endforeach
  {{ $links->render() }}

</main>
@endsection