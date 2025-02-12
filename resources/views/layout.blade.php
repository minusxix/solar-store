<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        <title>Solar</title>
    </head>
    <body>
        <header>
            <a href="/" class="logo">
                <img src="{{asset('img/logo.png')}}">
            </a>
            <ul class="nav">
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="/#kit">Solar Kit</a></li>
            </ul>
            <a href="{{route('login')}}" class="login">Login</a>
        </header>
        @yield('content')
        <footer>
            <div class="cirle">
                <a href="#"><i class="bx bxs-phone-call"></i></a>
                <a href="#"><i class="bx bxl-facebook-circle"></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
            </div>
            <div class="square">
                <a href="/">Home</a>
                <a href="/#about">About</a>
                <a href="/#contact">Contact</a>
                <a href="/#location">Location</a>
                <a href="#">Legal</a>
            </div>
            <div class="credit">Created By <span>Min Yoon</span> | 2025</div>
        </footer>
        <script src="{{asset('js/script.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({offset: 1});
        </script>
    </body>
</html>
