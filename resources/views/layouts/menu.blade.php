
       <header>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default">
<!--                             <div class="container-fluid">
 -->                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php">
                                        <strong>Sietynų paveldas Lietuvoje</strong>
                                    </a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ route('welcome')}}#about">Apie projektą</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sietynai
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('cards.catalog', ['sort_order' => 0]) }}">Pagal pagaminimo laiką</a></li>
                                            <li><a href="{{ route('cards.catalog', ['sort_order' => 1]) }}">Pagal stilių</a></li>
                                            <li><a href="{{ route('cards.catalog', ['sort_order' => 2]) }}">Pagal tipologiją</a></li>
                                            <li><a href="{{ route('cards.catalog', ['sort_order' => 3]) }}">Pagal medžiagas</a></li>
                                            <li><a href="{{ route('cards.catalog', ['sort_order' => 4]) }}">Pagal pagaminimo šalį</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('cards.catalog', ['sort_order' => 5]) }}">Sunikę sietynai</a></li>
                                    <!-- <li><a href="{{ route('welcome') }}#posts">Naujenos</a></li> -->
                                    <li><a href="{{ route('welcome') }}#articles">Straipsniai</a></li>
                                    <li><a href="{{ route('welcome') }}#links">Nuorodos</a></li>
                                    <li><a href="{{ route('welcome') }}#contacts">Kontaktai</a></li>
                                    <li><a href="{{ route('englishs.show') }}">English</a></li>
    
                                    @if(Auth::check())
                                        <li><a href="{{ route('home') }}">Menu</a></li>
                                    @endif
                                    @guest
                                    <li><a href="{{ route('login') }}">Prisijungti</a></li>
                                    @else
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"> 
                                                Atsijungti
                                            </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endguest
                                </ul>
<!--                           </div>
 -->                        </nav>
                    </div>
                </div>
        </header>