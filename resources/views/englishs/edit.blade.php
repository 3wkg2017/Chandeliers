
@if(Auth::check() && Auth::user()->user_type == 'admin')
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">English version</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('englishs.update', $english->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                       	<script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
						<div class="form-group{{ $errors->has('text', $english) ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                            	 <textarea id="text" type="text" class="form-control" name="text" required autofocus >
                					{{ old('text', $english->text) }}
           						</textarea>
           					    <script>
                					CKEDITOR.replace( 'text' );
    							</script>

                                @if ($errors->has('text, $english'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text, $english') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
