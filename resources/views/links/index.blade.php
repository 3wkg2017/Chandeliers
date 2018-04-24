@if(Auth::check() && Auth::user()->user_type == 'admin')
	@extends('layouts.app')
	@section('content')

		<div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
			  		<div class="panel-heading"><h3>Nuorodos</h3></div>
			  		<div class="panel-body">
			  			<a href="{{ route('links.create') }}"><button class="btn btn-primary">Kurti naują</button></a>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Aprašas</th>
						      <th scope="col">Nuoroda</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($links as $link)
						    <tr>
						      <td>{{ $loop->index+1 }}</td>
						      <td>{!! $link->text !!}</td>
						      <td>{{ $link->url }}</td>
						
						      
							  <td scope="col">
							  		<form action="{{ route('links.edit', $link) }}" method="post">
											{{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-edit" style="color:green"></i></button>
									</form>
							  </td>
							  <td scope="col">
						      		<form action="{{ route('links.destroy', $link) }}" method="post" >
											{{ method_field('DELETE') }}
										    {{ csrf_field() }}
										    <button class="no-style"><i class="fa fa-remove" style="color:red"></i></button>
									</form>
						      </td>

						    </tr>
							@endforeach
						  </tbody>
						</table>
			     	{{ $links->render() }}
					</div>
	 			</div>
	   		</div>
		</div>
	@endsection
@endif