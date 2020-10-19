@extends('admin.layout.layout')
@section('content')




<div class="fotos_admin">
<div class="fotos_admin_body">

	<div class="fotos_admin_form_body">

		<div class="fotos_admin_form_title">Добавить фото</div>

		<form  action="{{route('foto.store')}}" method="post" enctype="multipart/form-data" class="fotos_admin_form">
{{ csrf_field() }}
		<div class="fotos_admin_input_title">Имя фотки</div>
		<input type="text" id="name" class="fotos_admin_input" name="portfolio_img_name" value="">

		<div class="fotos_admin_input_title">Описани фотки</div>
		<input type="text" id="name" class="fotos_admin_input" name="portfolio_img_info" value="">

		<input type="file" name="portfolio_img">
		<button type="submit" class="btn">Добавить</button>
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



@if($foto_items)
<div class="fotos_admin_list">
	<div class="fotos_admin_list_body">
		<div class="fotos_admin_list_title">Все изображения</div>

<div class="fotos_admin_list_table_title">
	<div class="fotos_admin_list_table_id">id</div>
	<div class="fotos_admin_list_table_name">имя изображения</div>
	<div class="fotos_admin_list_table_info">описание изображения</div>
	<div class="fotos_admin_list_table_img">изображени</div>
	<div class="fotos_admin_list_table_action">дейстивие</div>
</div>

<div class="fotos_admin_list_table_items">
@foreach($foto_items as $foto_item)
	<div class="fotos_admin_list_table_item">
		<div class="fotos_admin_list_item_id">{{$foto_item->id}}</div>
		<div class="fotos_admin_list_item_name">{{$foto_item->portfolio_img_name}}</div>
		<div class="fotos_admin_list_item_info">{{$foto_item->portfolio_img_info}}</div>
		<div class="fotos_admin_list_item_img"><img src="../img/portfolio/{{$foto_item->portfolio_img}}" alt=""></div>
		<div class="fotos_admin_list_item_action">
			<div class="fotos_admin_action_btn">
				<form action="{{ route('foto.destroy',['foto'=>$foto_item->id])}}" enctype="multipart/form-data"  method="POST">
					 {{ csrf_field() }}
	                 <input type="hidden" name="_method" value="DELETE">
	                <input type="submit" value="удалить" class="btn delete_btn">
	            </form>
			</div>
			<div class="fotos_admin_action_btn">
				<form action="{{ route('foto.edit',['foto'=>$foto_item->id])}}" enctype="multipart/form-data"  method="GET">
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