<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>FORMAAA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

    <link rel="stylesheet" href="{{ asset('css/forma.css') }}">


</head>

<body>

<!-- Form-->

<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">


        <div class="form-header">
            <h1 >Создайте аккаунт</h1>
        </div>
        <div class="form-content">
            <form action="{{ route('register.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Имя</label>
                    <input type="text" id="username" name="name"/>
                    @error('name')
                    <span style="    padding: 10px;
                    margin-top: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */">{{$message}}  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" name="username"/>
                    @error('username')
                    <span style="    padding: 10px;
                    margin-top: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */">{{$message}}  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email"/>
                    @error('email')
                    <span style="    padding: 10px;
                    margin-top: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */">{{$message}}  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password"/>
                    @error('password')
                    <span style="    padding: 10px;
                    margin-top: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */">{{$message}}  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Подтвердите пароль</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"/>
                    @error('password_confirmation')
                    <span style="    padding: 10px;
                    margin-top: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    opacity: 1;
    transition: opacity 0.6s; /* 600ms to fade out */">{{$message}}  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span></span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit">Зарегистрироваться</button>
                </div>
                <a style="text-decoration:none;font-size: 15px;color: #3d9680" href="{{route("login")}}">Авторизоваться</a>
            </form>
        </div>
    </div>


    <script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function(){

        // Get the parent of <span class="closebtn"> (<div class="alert">)
        var div = this.parentElement;

        // Set the opacity of div to 0 (transparent)
        div.style.opacity = "0";

        // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>



</body>
</html>
