<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Zdjecia i filmy z drona i czasem z ziemi">
	<meta name="author" content="">
	<title>{{ $title }}</title>

	<link rel="stylesheet" href="../css/admin_style.css" />
	

</head>
<body>
	<div class="wrapper" id="wrapper">

<div class="menu">
	<div class="menu_body">

			<div class="menu__logo">
				<div class="menu__logo_img"><img src="../img/logo_1.png" alt="logo">	</div>				
				<div class="menu_info">
					<div class="logo_title"><a href="{{ route('adminIndex')}}">Admin</a></div>					
				</div>							
			</div>
			<div class="header__burger">
			<span></span>
			</div>
			<nav class="menu__nav">
				<ul class="menu__list">
					<li><a href="{{ route('services.index')}}" class="menu__link">услюги</a></li>
					<li><a href="{{ route('video.index')}}" class="menu__link">Видео</a></li>
					<li><a href="{{ route('foto.index')}}" class="menu__link">Фото</a></li>
					<li><a  class="menu__link" href="{{ route('logout') }}"
   							 onclick="event.preventDefault();
				             document.getElementById('logout-form').submit();">
				   			 выйти</a>						
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						    {{ csrf_field() }}
						</form>
					</li>
				</ul>
			</nav>
	</div>
			
</div>

@yield('content') 

</div>	 
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/jquery.validate.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>