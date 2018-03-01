@extends('layouts.head')
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pridėti kortele</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('cards.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Pavadinimas</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Adresas</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('style') ? ' has-error' : '' }}">
                            <label for="style" class="col-md-4 control-label">Stylius</label>

                            <div class="col-md-6">
                                <input id="style" type="text" class="form-control" name="style" value="{{ old('style') }}" required autofocus>

                                @if ($errors->has('style'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('style') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                   		 <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipas</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   


	 					<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">Kodas / Inv. Nr.</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



	 					<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Šalis</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



	 					<div class="form-group{{ $errors->has('material') ? ' has-error' : '' }}">
                            <label for="material" class="col-md-4 control-label">Medžiaga</label>

                            <div class="col-md-6">
                                <input id="material" type="text" class="form-control" name="material" value="{{ old('material') }}" required autofocus>

                                @if ($errors->has('material'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('material') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




	 					<div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                            <label for="size" class="col-md-4 control-label">Išmatavimai</label>

                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}" required autofocus>

                                @if ($errors->has('size'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('size') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





	 					<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Data</label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



	 					<script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
						<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Tekstas</label>
                            <div class="col-md-6">
                            	 <textarea id="text" type="text" class="form-control" name="text" value="{{ old('text') }}" required autofocus >
                					.
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


                        <!-- add new file and description -->
                        <div class="input_fields_wrap form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">Prideti bylą</label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}" required autofocus>

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image_title') ? ' has-error' : '' }}">
                            <label for="image_title" class="col-md-4 control-label">Pavadinimas</label>

                            <div class="col-md-6">
                                <input id="image_title" type="text" class="form-control" name="image_title" value="{{ old('image_title') }}" required autofocus>

                                <button class="add_field_button btn btn-primary">
                                    <i class="fa fa-plus"></i>
                             	</button>
                            
                                @if ($errors->has('image_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                             
                             
                        </div>
						<!-- end of add new file and description -->



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
