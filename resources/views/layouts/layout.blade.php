<!DOCTYPE html>
<html>
<head>
	<meta name='wmail-verification' content='218fb1953e7ad25ed696a00d9bac4050' />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link href="/css/styles.css" type="text/css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">  


</head>
<body>
	@include('layouts.header')
	</br>
	<div class="container">
		<div class="col-xs-12 col-md-3 col-lg-3">	
			@include('layouts.leftMenu')
		</div>
		<div class="content col-xs-12 col-md-9 col-lg-9">
			@yield('content')
		</div>	
	</div>
	</br>
	@include('layouts.footer')	

    <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript" src="/js/opalubka.js"></script>
    <script type="text/javascript" src="/js/ajax.js"></script>
    
</body>
</html>