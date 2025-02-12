@extends('layout')
@section('content')
<section class="animation">
    <div class="ani-intro">
        <h3 data-aos="fade-right" data-aos-duration="1400">Solar panel for every house!</h3>
        <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">SOLAR PANEL</h1>
        <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">A solar panel is a technology that converts sunlight into electricity. It helps save energy and protect the environment by using renewable energy sources that produce no pollution.</p>
        <a href="#" class="int-button" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">Contact Now</a>
    </div>
    <div class="ani-image" data-aos="zoom-in" data-aos-duration="1400">
        <img src="{{asset('img/solar.png')}}">
    </div>
    <div class="ani-social">
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="600"><i class="bx bxs-phone-call"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="700"><i class="bx bxl-facebook-circle"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="800"><i class="bx bxl-youtube"></i></a>
    </div>
</section>
<section class="about" id="about">
    <h1 data-aos="fade-up" data-aos-duration="1400" data-aos-delay="200"><span>ABOUT</span> US</h1>
    <div class="row">
        <div class="ab-image" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300">
            <img src="{{asset('img/about.jpg')}}">
        </div>
        <div class="ab-content">
            <h3 data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">What Makes Our Solar Panel Special?</h3>
            <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="400">A solar panel is a device that converts sunlight into electricity through the photovoltaic effect. It consists of solar cells made from silicon, protected by a metal frame and a transparent glass layer. Saves electricity, reduces environmental impact, lowers greenhouse gas emissions, and requires low maintenance.</p>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <form action="">
        <h1 data-aos="flip-up" data-aos-duration="1400" data-aos-delay="300">GET IN TOUCH</h1>
        <div class="con-number">
            <i class='bx bxs-phone'></i>
            <input type="number" placeholder="Number">
        </div>
        <div class="con-email">
            <i class='bx bxs-envelope'></i>
            <input type="email" placeholder="Email">
        </div>
        <div class="con-name">
            <i class='bx bxs-user'></i>
            <input type="name" placeholder="Name">
        </div>
        <input type="submit" class="con-button" value="Contact">
    </form>
</section>
<section class="kit" id="kit">
    <h3 data-aos="fade-up-right" data-aos-duration="1400" data-aos-delay="300">SOLAR KIT</h3>
    <div class="row">
        @foreach ($category as $key => $cate)
            <div class="kit-category" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">
                <a href="{{route('kit', [$cate->slug])}}">{{$cate->title}}</a>
            </div>
        @endforeach
    </div>
</section>
<hr class="divider">
<section class="location" id="location">
    <h3 data-aos="fade-up-left" data-aos-duration="1400" data-aos-delay="300">LOCATION</h3>
    <div class="location-bot" data-aos="zoom-out-down" data-aos-duration="1400" data-aos-delay="400">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2451812502986!2d106.6821949!3d10.7925243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175296da8474273%3A0xa8f272afc828dd5e!2s3B%20Art%20Gallery!5e0!3m2!1svi!2s!4v1736525928880!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
