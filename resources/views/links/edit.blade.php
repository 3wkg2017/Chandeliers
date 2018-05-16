
@if(Auth::check() && Auth::user()->user_type == 'admin')
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nuorodos</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('links.update', $link->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                       	<script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
						<div class="form-group{{ $errors->has('text', $link) ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Aprašas</label>
                            <div class="col-md-6">
                            	 <textarea id="text" type="text" class="form-control" name="text" required autofocus >
                					{{ old('text', $link->text) }}
           						</textarea>
           					    <script>
                					CKEDITOR.replace( 'text' );
    							</script>

                                @if ($errors->has('text, $link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text, $link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Nuoroda</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{ old('url', $link->url) }}" required autofocus>
                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
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
