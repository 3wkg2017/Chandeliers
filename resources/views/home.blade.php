@extends('layouts.head')
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
               <div class="alert alert-dismissible alert-secondary">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4 class="alert-heading">Sekmingai prisijungei administratoriaus teisemis</h4>
                  <p class="mb-0">
                      Prisijungus, kaip kaip addministratorius gali peržiūrėti, sukurti, redaguoti ir trinti korteles, naujenas, straipsnius ir nuorodas. Administratoriaus funkcijos pasiekiamos per menu.
                  </p>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
