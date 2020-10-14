
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Zdjecia i filmy z drona i czasem z ziemi">
    <meta name="author" content="">
    <title>login</title>

    <link rel="stylesheet" href="css/admin_style.css" />
    

</head>
<body>
    <div class="wrapper" id="wrapper">
<div class="login">
<div class="login_body">
             
<form method="POST" action="{{ route('login') }}">
@csrf                   
    <div class="login_admin_input_title">Имя</div>
    <input id="name" type="name" class="login_admin_input" name="name" value="" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid_feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
           
     <div class="login_admin_input_title">Пороль</div>
    <input id="password" type="password" class="login_admin_input" name="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid_feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit" class="btn">Войти</button>
</form>
</div>

</div>




    </div>   
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>