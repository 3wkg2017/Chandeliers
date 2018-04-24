@if(Auth::check() && Auth::user()->user_type == 'admin')
	@extends('layouts.app')
	@section('content')

		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
			  		<div class="panel-heading"><h3>Apie projektą</h3></div>
			  		<div class="panel-body">
			  			<a href="{{ route('abouts.create') }}"><button class="btn btn-primary">Kurti naują</button></a>

			  			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Aprašas</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($abouts as $about)
						    <tr>
						      <td>{{ $loop->index+1 }}</td>
						      <td>{!! $about->text !!}</td>
						
						      
							  <td scope="col">
							  		<form action="{{ route('abouts.edit', $about) }}" method="post" >
											{{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-edit" style="color:green"></i></button>
									</form>
							  </td>
							  <td scope="col">
						      		<form action="{{ route('abouts.destroy', $about) }}" method="post" >
											{{ method_field('DELETE') }}
										    {{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-remove" style="color:red"></i></button>
									</form>
						      </td>

						    </tr>
							@endforeach
						  </tbody>
						</table>
			     	{{ $abouts->render() }}
					</div>
				   	
	 			</div>
	   		</div>
		</div>
	@endsection
@endif