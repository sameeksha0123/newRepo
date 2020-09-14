<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twilight</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ url('css/welcome.css') }}">
        <!-- Styles -->
    </head>
    <body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <!-- <a href="#">Your Logo</a> -->
                <img src="appname.png" width="170" height="">
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <section class="home"></section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('js/welcome.js')}}"></script>
        <!-- Function used to shrink nav bar removing paddings and adding black background -->
    </body>
</html>
