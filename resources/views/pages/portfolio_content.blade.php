<div class="portfolio">	
		<div class="modal_for_video">
	<div class="modal_video_body">
		<video controls autoplay class="modalvideo">
		  	<source src="" type="video/mp4">
		  		Your browser does not support HTML5 video.
		 </video>
	</div>
</div>
<div class="modal">
	<div class="modal_body"><img src="" alt=""></div>
</div>
	<div class="video">
		<div class="video_body">
			<div class="video_title">FILMY Z DRONA</div>
			<div class="video_text">Filmowanie dronem — produkcje filmowe​</div>
			<div class="video_content">
			  @if($portfolio_videos)
		          @foreach($portfolio_videos as $video)
					<div class="video_popup ibg" data-src="./video/{{$video->portfolio_video}}">
						<img class="video_popup_img" src="./img/foto_for_videocover/{{$video->img_for_cover}}" alt="">
					</div>
				  @endforeach  
			  @endif		
			</div>	
		</div>
	</div>
	<div class="foto">
		<div class="foto_body">
			<div class="foto_title">Photo</div>
			<div class="foto_text">fotografia lotnicza, zdjęcia z drona, zdjęcia dronem</div>
			<div class="foto_content">

			  @if($portfolio_fotos)
		          @foreach($portfolio_fotos as $foto)
					<div class="popup">
						<img class="popup_img" src="img/portfolio/{{$foto->portfolio_img}}" alt="{{$foto->portfolio_img_info}}">
					</div>
				  @endforeach  
			  @endif
					
			</div>	
		</div>
	</div>
</div>