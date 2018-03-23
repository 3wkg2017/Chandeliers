@if(Auth::check())
  @extends('layouts.app')
  @section('content')
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="panel panel-default">
                 <div class="panel panel-body">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Sekmingai prisijungei administratoriaus teisemis</h4>
                    <p>
                        Prisijungus, kaip kaip addministratorius gali peržiūrėti, sukurti, redaguoti ir trinti korteles, naujenas, straipsnius ir nuorodas. Administratoriaus funkcijos pasiekiamos per menu.
                        <br />

                        <a href="{{ route('posts.index') }}"><button class="btn btn-success">Naujenos</button>

                        <a href="{{ route('cards.index') }}"><button class="btn btn-primary">Kortelės</button>
                        
                        <a href="#"><button class="btn btn-danger">Straipsniai</button>

                        <a href="#"><button class="btn btn-info">Nuorodos</button>

                        <a href="{{ route('abouts.index') }}"><button class="btn btn-warning">Apie</button>

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
@endif