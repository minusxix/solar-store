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
                <li><a href="#kit">Solar Kit</a></li>
            </ul>
            <a href="login" class="login">Login</a>
        </header>
        @yield('content')
        <section class="kit" id="kit">
            <!-- $kit -> $slug -->
            <a href="{{route('kit', ['saver'])}}">Saver</a>
            <a href="{{route('kit', ['standard'])}}">Standard</a>
        </section>
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2451812502986!2d106.6821949!3d10.7925243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175296da8474273%3A0xa8f272afc828dd5e!2s3B%20Art%20Gallery!5e0!3m2!1svi!2s!4v1736525928880!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <footer>
            <div class="cirle">
                <a href="#"><i class="bx bxs-phone-call"></i></a>
                <a href="#"><i class="bx bxl-facebook-circle"></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
            </div>
            <div class="square">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
                <a href="#">Legal</a>
                <a href="#">Location</a>
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
