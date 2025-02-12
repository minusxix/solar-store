@extends('layout')
@section('content')
<section class="product">
    <h3>Điện Năng Lượng Mặt Trời {{$product->title}}</h3>
    <!-- <hr class="divider"> -->
    <div class="row">
        <div class="prod-left">
            <img src="{{asset('up/cate/' . $product->image)}}">
        </div>
        <div class="prod-right">
            <p>Mô tả:
                <br>{{$product->description}}
                <br>
                <br>Liên hệ ngay để nhận ưu đãi hấp dẫn!
            </p>
        </div>
    </div>
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
<section class="location" id="location">
    <h3 data-aos="fade-up-left" data-aos-duration="1400" data-aos-delay="300">LOCATION</h3>
    <div class="location-bot" data-aos="zoom-out-down" data-aos-duration="1400" data-aos-delay="400">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2451812502986!2d106.6821949!3d10.7925243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175296da8474273%3A0xa8f272afc828dd5e!2s3B%20Art%20Gallery!5e0!3m2!1svi!2s!4v1736525928880!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
