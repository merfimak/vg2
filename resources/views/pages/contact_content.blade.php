<div class="contact">	
<div class="contact_body">
	<div class="contact_title">WYSŁAĆ WIADOMOŚĆ​</div>
	<div class="contact_text">Jeżeli masz jakieś pytania lub chcesz skorzystać z moich usług zadzwoń do mnie, wyślij e-mail lub napisz posługując się poniższym formularzem​</div>
	<form action="{{route('contact.store')}}" class="contact_form" method="post">
		 {{csrf_field()}}
		<div class="contact_input_title">Imię</div>
		<input type="text" id="name" class="input" name="name" value="{{ old('name') }}">
		@if ($errors->get('name'))
			@foreach ($errors->get('name') as $var)
                <div class="error">{{ $var }}</div>
            @endforeach
		@endif
		<div class="contact_input_title">Email</div>
		<input type="text" id="email" class="input" name="email" value="{{ old('email') }}">
		@if ($errors->get('email'))
			@foreach ($errors->get('email') as $var)
                <div class="error">{{ $var }}</div>
            @endforeach
		@endif
		<div class="contact_input_title">Telefon</div>
		<input type="text" id="telefon" class="input" name="telefon" value="{{ old('telefon') }}">
		@if ($errors->get('telefon'))
			@foreach ($errors->get('telefon') as $var)
                <div class="error">{{ $var }}</div>
            @endforeach
		@endif
		<div class="contact_input_title">Wiadomość</div>
		<textarea type="text" id="message" class="input" name="message" value="">{{ old('message') }}</textarea>
		@if ($errors->get('message'))
			@foreach ($errors->get('message') as $var)
                <div class="error">{{ $var }}</div>
            @endforeach
		@endif
		@if(session('success'))
		<div class="session_success">{{session('success')}}</div> 
		@endif
		<button type="submit" class="btn">Wyśli</button>
	</form>
</div>
</div>