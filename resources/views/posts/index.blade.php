@if(Auth::check())
	@extends('layouts.app')
	@section('content')

		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
			  		<div class="panel-heading"><h3>Naujenos</h3></div>
			  		<div class="panel-body">
			  			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Aprašas</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($posts as $post)
						    <tr>
						      <td>{{ $loop->index }}</td>
						      <td>{!! $post->text !!}</td>
						
						      
							  <td scope="col">
							  		<form action="{{ route('posts.edit', $post) }}" method="get" >
											{{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-edit" style="color:green"></i></button>
									</form>
							  </td>
							  <td scope="col">
						      		<form action="{{ route('posts.destroy', $post) }}" method="post" >
											{{ method_field('DELETE') }}
										    {{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-remove" style="color:red"></i></button>
									</form>
						      </td>

						    </tr>
							@endforeach
						  </tbody>
						</table>
			     	{{ $posts->render() }}
					</div>
	 			</div>
	   		</div>
		</div>
	@endsection
@endif