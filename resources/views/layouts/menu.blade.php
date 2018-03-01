
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
                                    <li><a href="index.php#about">Apie projektą</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sietynai
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Pagal pagaminimo laiką</a></li>
                                            <li><a href="">Pagal stilių</a></li>
                                            <li><a href="">Pagal tipologiją</a></li>
                                            <li><a href="">Pagal medžiagas</a></li>
                                            <li><a href="">Pagal pagaminimo šalį</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Sunikę sietynai</a></li>
                                    <li><a href="">Straipsniai</a></li>
                                    <li><a href="">Nuorodos</a></li>
                                    <li><a href="">Kontaktai</a></li>
                                    <li><a href="">English</a></li>
    
                                    @if(Auth::check())
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Valdymo skydas
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Naujenos</a></li>
                                            <li><a href="">Straipsniai</a></li>
                                            <li><a href="">Nuorodos</a></li>
                                            <li><a href="{{ route('cards.create') }}">Kortelės</a></li> 
                                            <li><a href="{{ route('register') }}">Valdytojai</a></li>      
                                        </ul>
                                    </li>
                                    @endif



                                    <!-- Authentication Links -->
                                    @guest
                                    <!-- <li><a href="{{ route('login') }}"> <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a></li> -->
                                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a></li>
                                    @else
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"> 
                                            <!-- <i class="fas fa-sign-out-alt" aria-hidden="true"></i> -->
                                                <i class="fa fa-sign-out"></i>
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