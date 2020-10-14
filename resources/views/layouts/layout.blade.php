<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="css/style.css" />
	

</head>
<body>	
<div class="wrapper" id="wrapper">



@yield('main_video')
@yield('navigation')
@yield('content')
@yield('footer')







</div>	 
	<script src="./js/jquery-3.5.1.min.js"></script>
	<script src="./js/jquery.validate.min.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>