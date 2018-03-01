<!-- <body oncontextmenu="return false;"> -->
<body>
    <div class="container">
       @include('layouts.menu')
       @yield('content')
        <footer class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <article id="contacts">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Kontaktai</h3>
                            </div>
                            <div class="panel-body">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Dr. Alantė Valtaitė</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> sietynupavedas<img src=" {{ asset('img/Service/eta.png') }}" alt="Eta">gmail.com</p>
                                <p><i class="fa fa-copyright" aria-hidden="true"></i> <span class="thisYear"></span> Visos teises saugomos</p>
                                    <script>
                                        var d = new Date();
                                        var n = d.getFullYear(); 
                                        document.querySelector('.thisYear').innerHTML = n;
                                    </script>
                            </div>
                        </div>
                        <!-- GO TOP -->
                        <a href="#">
                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        </a>
                        <!-- END GO TOP -->
                    </article>  
            </div>
        </footer>           
    </div>
</body>
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>
