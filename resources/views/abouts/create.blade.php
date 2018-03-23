
@if(Auth::check())
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Apie skiltis</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('abouts.store') }}">
                        {{ csrf_field() }}
               
                       	<script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
						<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Aprašas</label>
                            <div class="col-md-6">
                            	 <textarea id="text" type="text" class="form-control" name="text" required autofocus >
                					{{ old('text') }}
           						</textarea>
           					    <script>
                					CKEDITOR.replace( 'text' );
    							</script>

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	
                   
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Išsaugoti
                                </button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif
