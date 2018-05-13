<!DOCTYPE html>
<html lang="lt">
<head>
    <meta name="description" content="Lietuvos Sietinų paveldas">
    <meta name="keywords" content="Sietynai, Sietinas, paveldas, Sietinų paveldas Lietuvoje, Sietynų katalogas, Muziejus, Istorinis paveldas, Fondai, Katalogas">
    <meta name="author" content="Alante V.">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Latest reset css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css">
    <!-- jQuery library -->
     <script src="https://use.fontawesome.com/371c590d7c.js"></script>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- CKEditor -->
    <script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
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

<body oncontextmenu="return false;" class="image-viewer">
	<div class="image-viewer">
			<a href="javascript:history.go(-1)">
						<img src="{{ asset($image->image)  }}" alt="{{ $image->title }}" />
					<p>{{ $image->title }}</p>
			</a>
			<a href="javascript:history.go(-1)">Atgal</a>
	</div>			
</body>
</html>