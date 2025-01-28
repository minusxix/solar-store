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
@endsection
