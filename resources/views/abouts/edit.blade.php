
@if(Auth::check() && Auth::user()->user_type == 'admin')
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Apie skiltis</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('abouts.update', $about->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        
                       	<script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
						<div class="form-group{{ $errors->has('text', $about) ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Aprašas</label>
                            <div class="col-md-6">
                            	 <textarea id="text" type="text" class="form-control" name="text" required autofocus >
                					{{ old('text', $about->text) }}
           						</textarea>
           					    <script>
                					CKEDITOR.replace( 'text' );
    							</script>

                                @if ($errors->has('text, $about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text, $about') }}</strong>
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
