@extends('admin.layout.layout')
@section('content')


<div class="videos_admin">
<div class="videos_admin_body">

<div class="videos_admin_form_body">

		<div class="videos_admin_form_title">Добавить Видео</div>

		<form action="{{route('video.store')}}" class="videos_admin_form" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="videos_admin_input_title">Имя Видео</div>
		<input type="text" id="videos_admin_name" class="videos_admin_name" name="portfolio_video_name" value="">

		<div class="videos_admin_input_title">Обложка видео</div>
		<input type="file" id="videos_admin_cover" class="videos_admin_cover" name="img_for_cover" value="">

		<div class="videos_admin_input_title">Видео</div>
		<input type="file" id="videos_admin_video" class="videos_admin_video" name="portfolio_video" value="">

		<button type="submit" class="btn">Добавить</button>



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



		</form>
</div>


@if($video_items)
	<div class="videos_admin_list">
			<div class="videos_admin_list_body">
				<div class="videos_admin_list_title">Все видео</div>
		<div class="videos_admin_list_table_title">
			<div class="videos_admin_list_table_id">id</div>
			<div class="videos_admin_list_table_name">имя видео</div>
			<div class="videos_admin_list_table_cover">обложка</div>
			<div class="videos_admin_list_table_img">видео</div>
			<div class="videos_admin_list_table_action">дейстивие</div>
		</div>
		<div class="videos_admin_list_table_items">
@foreach($video_items as $video_item)
			<div class="videos_admin_list_table_item">
				<div class="videos_admin_list_item_id">{{$video_item->id}}</div>
				<div class="videos_admin_list_item_name">{{$video_item->portfolio_video_name}}</div>

				<div class="videos_admin_list_item_cover"><img src="../img/foto_for_videocover/{{$video_item->img_for_cover}}" alt=""></div>

				<div class="videos_admin_list_item_video">
					<video controls>
				  		<source src="../video/{{$video_item->portfolio_video}}" type="video/mp4">
				  		 Your browser does not support HTML5 video.
					</video>
				</div>

				<div class="videos_admin_list_item_action">
					<div class="fotos_admin_action_btn">
						<form action="{{ route('video.destroy',['video'=>$video_item->id])}}" enctype="multipart/form-data"  method="POST">
							{{ csrf_field() }}
			                <input type="hidden" name="_method" value="DELETE">
			                <input type="submit" value="удалить" class="btn delete_btn">
			            </form>
			           <form action="{{ route('video.edit',['video'=>$video_item->id])}}" enctype="multipart/form-data"  method="GET">
					 {{ csrf_field() }}
	                <input type="submit" value="изменить" class="btn edit_btn">
	            </form>
					</div>
				</div>
			</div>
			<div class="admin_uslugi_line"></div>
@endforeach 

		</div>


		</div>
	</div>
@endif
</div>
</div>

@endsection 