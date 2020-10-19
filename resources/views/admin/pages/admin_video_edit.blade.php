
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Zdjecia i filmy z drona i czasem z ziemi">
	<meta name="author" content="">
	<title>{{ $title }}</title>

	<link rel="stylesheet" href="../../../css/admin_style.css" />
	

</head>
<body>
	<div class="wrapper" id="wrapper">
<div class="menu">
	<div class="menu_body">

			<div class="menu__logo">
				<div class="menu__logo_img"><img src="../../../img/logo_1.png" alt="logo">	</div>				
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





<div class="foto_edit_admin_body">
<div class="fotos_admin_form_title">изменить видео</div>

<form  action="{{route('video.update',['video_for_edit'=>$video_for_edit->id])}}" method="post" enctype="multipart/form-data" class="foto_edit_admin_form">
{{ csrf_field() }}




<div class="videos_admin_input_title">Имя Видео</div>
<input type="text" id="videos_admin_name" class="videos_admin_name" name="portfolio_video_name" value="{{$video_for_edit->portfolio_video_name}}">


<div class="videos_admin_input_title">Обложка видео</div>
<div class="foto_edit_admin_img">
	 <img src="/img/foto_for_videocover/{{$video_for_edit->img_for_cover}}" alt="">
  <input type="hidden" name="old_cover" value="{{$video_for_edit->img_for_cover}}">
</div>
<input type="file" id="videos_admin_cover" class="videos_admin_cover" name="img_for_cover" value="">


<div class="videos_admin_input_title">Видео</div>
<div class="video_edit_admin_video">
	 <video controls>
  		<source src="/video/{{$video_for_edit->portfolio_video}}" type="video/mp4">
  		 Your browser does not support HTML5 video.
	</video>
  <input type="hidden" name="old_video" value="{{$video_for_edit->portfolio_video}}">
</div>
<input type="file" id="videos_admin_video" class="videos_admin_video" name="portfolio_video" value="">




<input type="hidden" name="_method" value="PUT">
<button type="submit" class="btn edit_btn">изменить</button>
</form>








 @if (count($errors) > 0)
  <div class="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
@if(session('success'))
<div class="success">{{session('success')}}</div> 
@endif
</div>












</div>	 
	<script src="../../../js/jquery-3.5.1.min.js"></script>
	<script src="../../../js/jquery.validate.min.js"></script>
	<script src="../../../js/script.js"></script>
</body>
</html>