@extends('layouts.main')

@section('title', 'Buzz Taxis')

@section('description', 'We are a Yeovil based Taxi and Transportation firm that provides high quality services in the United Kingdom and abroad. Above and Beyond, the extra mile you need!')

@section('content')

<div class="grid-item main-grid" id="home-page">

<div class="content-banner">
    <h1>Above and beyond, the extra mile you need!</h1>
</div>

<div class="content-section A" id="Services">
    <div class="content-two-third">
        <div class="section-title">
            <h1>Yeovil Taxi Services</h1>
        </div>

        <div class="card-container">
            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-car"></i>
                </div>
                <div class="card-title">
                    <h6>Chauffeur Hire</h6>
                </div>
                <div class="card-body">
                    Elevate your travel experience with professional, personalized service. We will take you from anywhere to anywhere within the United Kingdom or international.
                </div>
            </div>

            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="card-title">
                    <h6>Airport Transfer</h6>
                </div>
                <div class="card-body">
                    Professional and reliable airport transfer services, we handle both you and your luggage's transportation to your preferred destination.
                </div>
            </div>

            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-suitcase-rolling"></i>
                </div>
                <div class="card-title">
                    <h6>Tailored Experience</h6>
                </div>
                <div class="card-body">
                    We have custom-tailored each experience to suit your journey - from sweets and drinks to music and ambience.
                </div>
            </div>

            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
                <div class="card-title">
                    <h6>Comfort and Safety</h6>
                </div>
                <div class="card-body">
                    We are dedicated to providing you with a travel experience that not only meets expectations but exceeds them. 
                </div>
            </div>

            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <div class="card-title">
                    <h6>Custom Fares</h6>
                </div>
                <div class="card-body">
                    We recognize regular and constant business by offering personalized fares, ensuring that you get the best service and pricing according to your needs.
                </div>
            </div>

            <div class="card-box">
                <div class="card-icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <div class="card-title">
                    <h6>Online Booking</h6>
                </div>
                <div class="card-body">
                    Your travel needs can be fulfilled by booking one of our cars at a moment's notice, making your travel arrangements effortless and efficient.
                </div>
            </div>
        </div>

    </div>


    
    <div class="content-one-third">

        
        @if (session()-> has('booking_success_message')) 
        <div class="confirmation-message">
            <p>
        {{ session()->get('booking_success_message') }}
    </p>
    </div>
    @endif

        <div class="section-title">
            <h1>Book a Cab!</h1>
        </div>

        

        <div class="section-content">
            <p>You can either call us or submit this form to hire us for your travel needs. From the moment you hire us, until the moment you are dropped off you will become our most important client.  </p>
        </div>
        <form action="/addBooking" id="book-form" method="POST">
            @csrf
            <div class="input-wrap">
                    <i class="fa-solid fa-user" id="form-icon"></i>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required autocomplete="name">  
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-person" id="form-icon" style="font-size: 28px"></i>
                <input class="form-control" type="text" id="number" name="nr_people" placeholder="Number of People*" required autocomplete="off">
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-calendar-days" id="form-icon"></i>
                <input class="form-control" type="datetime-local" id="date" name="date" placeholder="Date*" required autocomplete="off">
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-phone" id="form-icon"></i>
                <input class="form-control" type="tel" pattern="[0-9]{0, 12}" maxlength="12" id="phone" name="phone" placeholder="Phone Number *" required autocomplete="tel">
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-envelope" id="form-icon"></i>
                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email* " required autocomplete="email">
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-location-dot" id="form-icon"></i>
                <input class="form-control address-container" type="text" id="address-container" name="pickup" placeholder="Pickup Address*" required>
            </div>
            <div class="input-wrap">
                <i class="fa-solid fa-location-dot" id="form-icon"></i>
                <input class="form-control address-container" type="text" id="destination-container" name="destination" placeholder="Destination Address*" required>
            </div>
            <div class="input-wrap">
                <button class="button-large" id="form-submit" type="submit">Book Now!</button>
            </div>
        </form>
    
    </div>

    
</div>

<br>

<div class="content-section B" id="About">
    <div class="section-title">
        <h1>Who we are</h1>
    </div>
        <div class="section-content flex" id="start-B">
        <div>
            <p>We are a family-ran company based in <strong>Yeovil</strong>, the United Kingdom. Over the seven years of accumulated experience in the taxi industry, we have learnt that a ride can make or break a customer's day. And so, My wife and I started this business together because we are passionate about people and their needs and we want our customers to leave with a smile from our car, emboldened to proceed on with their busy ventures.</p>
            <p>Our services are destined to everyone, whether you are a business traveler, a tourist, or a family, we understand the importance of punctuality, comfort, safety and customer service. At Buzz-Taxi, <strong>Above and beyond</strong>, we strive to be <strong> the extra mile you need. </strong> </p>
        </div>
        <div class="image-container spaced-left">
            <img class="image-square" src="/images/static/car_2.jpg">
        </div>
    </div>
    <div class="section-content flex reverse">
        <div class="spaced-right">
            <p>Your safety is our top priority. We strive to maintain the highest safety standards in the industry. Our vehicles undergo regular maintenance and safety inspections, and our drivers have accumulated years of experience and professionalism. </p>
            <p>From the moment you book a ride to your arrival at your destination, we prioritize your comfort and satisfaction. Our friendly and professional drivers are not just chauffeurs but also knowledgeable guides who can assist you with local insights and recommendations. We listen to your needs and tailor our services accordingly, making each ride with us a personalized and enjoyable experience.</p>
        </div>
        <div class="image-container">
            <img class="image-square" src="/images/static/car_1.jpg">
        </div>
    </div>
</div>

<div class="content-section C" id="Contact">
    <div class="section-title">
        <h1>Contact Us</h1>
    </div>
    @if (session()-> has('contact_success_message')) 
    <div class="confirmation-message">
        <p>
    {{ session()->get('contact_success_message') }}
</p>
</div>
@endif
<div class="section-content" id="start-C">
        <p>We are a family company so for us your feedback is much appreciated. If you have any message please send and we will do our best to respond in a timely manner.</p>
    </div>
    <div class=contact-container>
        <form action="/sendMessage" method="POST">
            @csrf
            <div class="contact-form-container">
                    <i class="fa-solid fa-user animate-contact" id="form-icon"></i>
                    <input class="form-control contact animate-contact" type="text" id="name" name="name" placeholder="Your Name*" required autocomplete="name">        

                <i class="fa-solid fa-envelope animate-contact" id="form-icon"></i>
                <input class="form-control contact animate-contact" type="text" id="email" name="email" placeholder="Your Email" required autocomplete="email">

                <i class="fa-solid fa-phone animate-contact" id="form-icon"></i>
                <input class="form-control contact animate-contact" type="text" id="phone" name="phone" placeholder="Phone Number*" autocomplete="tel">    
                
                <textarea class="msg animate-contact" name="message" placeholder="Your message here*"></textarea>

                    <button class="button-large animate-contact" id="form-submit" type="submit">Send Message</button>
            </div>
        </form>
        <div class="contact-misc animate-contact">
            <p> Email: <strong>buzz_taxi@yahoo.com</strong> </p>
            <p> Phone Number: <strong>07741681645</strong> </p>    
        </div>
    </div>
</div>

@if (sizeof($posts) > 0)
<div class="content-section E" id="E">
    <div class="section-title">
        <h1>Latest Posts</h1>
    </div>
    <div class="section-content" id="start-E">
        <p style="text-align: center"> Check out our latest blog posts. We are trying to post something new on a monthly basis! </p>
    </div>
    <div class="posts-container">

        @foreach ($posts as $post)
                    <div class="post-box">
            <div class="preview-image-container">
                <img class="preview-image" src="/{{$post->image_path}}">
            </div>
            <div class="post-title">
                <h6>{{$post->title}}</h6>
            </div>
    
            <div class="post-metadata">
                <span> <i class="fa-solid fa-user"></i> {{$post->user->name}} &nbsp / &nbsp &nbsp<i class="fa-regular fa-calendar-days"></i> {{date('jS M Y', strtotime($post->updated_at))}} </span>
            </div>

            <div class="preview-text">
                <p>{!! $post->description !!}</p>
            </div>
    
            <div class="Read-more">
                <a href="/blog/{{$post->slug}}">Read More</a>
            </div>
    
        </div>
    

        @endforeach
    </div>    
</div>

@endif


</div>


@endsection