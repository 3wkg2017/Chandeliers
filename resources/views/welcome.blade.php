<!DOCTYPE html>
<html lang="lt">
<head>
    <meta name="description" content="Lietuvos Sietinų paveldas">
    <meta name="keywords" content="Sietynai, Sietinas, paveldas, Sietinų paveldas Lietuvoje, Sietynų katalogas, Muziejus, Istorinis paveldas, Fondai, Katalogas">
    <meta name="author" content="Alante V.">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/reset.css">
    <!-- Latest compiled and minified bootswatch -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/371c590d7c.js"></script>
    <link rel="stylesheet" href="./styles/lights.css">
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="./styles/lights_ie.css" />
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111255312-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111255312-1');
    </script>
    <title>Sietynų paveldas</title>
</head>
<!-- <body oncontextmenu="return false;"> -->
<body>
    <div class="container">
        
        <header>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
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
                                            <li><a href="?catalog=1">Pagal pagaminimo laiką</a></li>
                                            <li><a href="?catalog=2">Pagal stilių</a></li>
                                            <li><a href="?catalog=3">Pagal tipologiją</a></li>
                                            <li><a href="?catalog=4">Pagal medžiagas</a></li>
                                            <li><a href="?catalog=5">Pagal pagaminimo šalį</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?catalog=99">Sunikę sietynai</a></li>
                                    <li><a href="index.php#articles">Straipsniai</a></li>
                                    <li><a href="index.php#reference">Nuorodos</a></li>
                                    <li><a href="index.php#contacts">Kontaktai</a></li>
                                    <li><a href="index.php?lang=english">English</a></li>
                                </ul>
                          </div>
                        </nav>
                    </div>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0"></li>
                              <li data-target='#myCarousel' data-slide-to='1'></li>
                              <li data-target='#myCarousel' data-slide-to='2'></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class='item active'>
                                    <img src='sources/img/Carousel/1.jpg' alt='Sietynas'>
                                </div>
                                <div class='item'>
                                    <img src='sources/img/Carousel/2.jpg' alt='Sietynas'>
                                </div>
                                <div class='item'>
                                    <img src='sources/img/Carousel/3.jpg' alt='Sietynas'>
                                </div>                        
                                <div class="carousel-caption hide">
                                    <h1>Historical Chandeliers in Lithuania</h1>
                                </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                </div>
        </header>
        
        <main>
        
        <footer class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <article id="contacts">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Kontaktai</h3>
                            </div>
                            <div class="panel-body">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Dr. Alantė Valtaitė</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>sietynupavedas<img src="./img/page/eta.png" alt="Eta">gmail.com</p>
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
</html>