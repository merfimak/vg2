@extends('admin.layout.layout')
@section('content')
<div class="uslugi">
<div class="uslugi_body">

	<div class="uslugi_title">редактируем цены на услугиы</div>

	<form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
	<div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">Light drone pakiet старая цена</div>
	<input type="text" id="name" class="admin_input" name="Light_drone_pakiet_old_price" value="{{$services_prices->Light_drone_pakiet_old_price}}">
	</div>
	<div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">Light drone pakiet новая цена</div>
	<input type="text" id="name" class="admin_input" name="Light_drone_pakiet_new_price" value="{{$services_prices->Light_drone_pakiet_new_price}}">
	</div>

	<div class="admin_uslugi_line"></div>

	<div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">FPV Drone Pakiet старая цена</div>
	<input type="text" id="name" class="admin_input" name="FPV_Drone_Pakiet_old_price" value="{{$services_prices->FPV_Drone_Pakiet_old_price}}">
	</div>
	<div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">FPV Drone Pakiet новая цена</div>
	<input type="text" id="name" class="admin_input" name="FPV_Drone_Pakiet_new_price" value="{{$services_prices->FPV_Drone_Pakiet_new_price}}">
    </div>
    <div class="admin_uslugi_line"></div>
    <div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">360 pakiet старая цена</div>
	<input type="text" id="name" class="admin_input" name="pakiet_360_old_price" value="{{$services_prices->pakiet_360_old_price}}">
	</div>
	<div class="admin_uslugi_item_price">
	<div class="uslugi_item_header_title">360 pakiet новая цена</div>
	<input type="text" id="name" class="admin_input" name="pakiet_360_new_price" value="{{$services_prices->pakiet_360_new_price}}">
	</div>
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
	<button type="submit" class="btn">Изменить</button>
	</form>
</div>

</div>
@endsection 