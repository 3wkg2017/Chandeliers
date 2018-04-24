@if(Auth::check() && Auth::user()->user_type == 'admin')
	@extends('layouts.app')
	@section('content')

		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
			  		<div class="panel-heading"><h3>Straipsniai</h3>

			  		</div>
			  		<div class="panel-body">
			  		<a href="{{ route('articles.create') }}"><button class="btn btn-primary">Kurti naują</button></a>
			  			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Aprašas</th>
						      <th scope="col">Nuoroda</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($articles as $article)
						    <tr>
						      <td>{{ $loop->index+1 }}</td>
						      <td>{!! $article->text !!}</td>
						      <td>{{ $article->url }}</td>
						
						      
							  <td scope="col">
							  		<form action="{{ route('articles.edit', $article) }}" method="post" >
											{{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-edit" style="color:green"></i></button>
									</form>
							  </td>
							  <td scope="col">
						      		<form action="{{ route('articles.destroy', $article) }}" method="post" >
											{{ method_field('DELETE') }}
										    {{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-remove" style="color:red"></i></button>
									</form>
						      </td>

						    </tr>
							@endforeach
						  </tbody>
						</table>
			     	{{ $articles->render() }}
					</div>
	 			</div>
	   		</div>
		</div>
	@endsection
@endif