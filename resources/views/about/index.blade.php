@extends('layouts.master')

@section('title', 'About Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_us container about_page">

        {{-- banner --}}
        <div style="position:relative;height: 110vh;z-index: 1;" >
            <img src="{{asset('/storage/'.$about->banner)}}" class="banner">
            <div class="search-realestate">
                <div class="desc_title">
                    <div class="main_title">Search Luxury Homes In Dubai</div>
                    <div class="desc">   Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.</div>
                </div>
            </div>
        </div>
        <div class="about_us">
            <div class="content" data-aos="fade-up">
                <div class="title">About us</div>
                <div class="flex_col">
                    <div class="col">
                        <div class="first">
                            <div class="title2 w_100">Wa are creative & strong team</div>
                            <div class="desc">
                                {{$about->about_us}}
                            </div>
                        </div>
                        <div class="second">
                            <div class="circle">
                                <img src="/images/circle.svg">
                                <div class="number_desc">
                                    <span>15</span>
                                    <div>Awards Winning</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="first">
                            <div class="title2">Our Mission</div>
                            <div class="desc">
                                {{$about->our_mission}}
                            </div>
                        </div>
                        <div class="second">
                            <div class="circle">
                                <img src="/images/circle.svg">
                                <div class="number_desc">
                                    <span>9</span>
                                    <div>Years experience</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="first">
                            <div class="title2">Our Vision</div>
                            <div class="desc">
                                {{$about->our_vision}}
                            </div>
                        </div>
                        <div class="second">
                            <div class="circle">
                                <img src="/images/circle.svg">
                                <div class="number_desc">
                                    <span>354</span>
                                    <div>Successful projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_empty"></div>
        <div class="our_expert">
            <div class="content" data-aos="fade-up">
                <div class="title">OUR EXPERT</div>
                <div class="title2">
                    <div class="flex">
                        <div>Friendly</div>
                        <div class="circle"></div>
                    </div>
                    <div> team</div>
                </div>
                <div class="desc">Every day we communicate with each other, solve our clients’ problems and work hard to succeed their business.</div>

                {{-- our expert  --}}
                <div class="swiper_expert">
                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev">Prev</div>
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-wrapper">
                      <!-- Slide 1 -->
                        @foreach($agents as $agent)

                            <div class="swiper-slide">
                                <img src="{{asset('/storage/'.$agent->image)}}" alt="Member" class="member-img" />
                                <div class="member-info">
                                    <div class="member-name">{{$agent->name}}</div>
                                    <div class="member-role">{{$agent->position}}</div>
                                    <a href="/teams/{{$agent->id}}">
                                        <img class="arrow" src="/images/arrow-right.svg">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                      <!-- Duplicate as needed -->

                    </div>
                </div>
            </div>
        </div>
        <div class="talking_expert">
            <div class="content" data-aos="fade-up">
                <div class="title">Talk To An Expert</div>
                <div class="desc">
                    Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect
                    match. Don't wait; let's embark on this exciting journey together.
                </div>
                @include('components.contact_form')
            </div>
        </div>
        </div>
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
