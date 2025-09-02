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
            <img src="/images/banner_contact.png" class="banner">
            <div class="search-realestate">
                <div class="desc_title">
                    <div class="main_title">Search Luxury Homes In Dubai</div>
                    <div class="desc">   Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.</div>
                </div>
            </div>
        </div>
        <div class="about_us">
            <div class="content" >
                <div class="title" data-aos="fade-up">About us</div>
                <div class="flex_col">
                    <div class="col" data-aos="fade-up">
                        <div class="first">
                            <div class="title2 w_100">Wa are creative & strong team</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. 
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidudfasf. 
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
                    <div class="col" data-aos="fade-up">
                        <div class="first">
                            <div class="title2">Our Mission</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. 
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidudfasf. 
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
                    <div class="col" data-aos="fade-up">
                        <div class="first">
                            <div class="title2">Our Vision</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. 
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidudfasf. 
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
            <div class="content">
                <div class="title" data-aos="fade-up">OUR EXPERT</div>
                <div class="title2" data-aos="fade-up">
                    <div class="flex">
                        <div>Friendly</div> 
                        <div class="circle"></div>
                    </div>
                    <div> team</div>
                </div>
                <div class="desc" data-aos="fade-up">Every day we communicate with each other, solve our clients’ problems and work hard to succeed their business.</div>

                {{-- our expert  --}}
                <div class="swiper_expert" data-aos="fade-up">
                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev">Prev</div>
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-wrapper">
                      <!-- Slide 1 -->
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
                      <!-- Duplicate as needed -->
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <img src="/images/user_expert.png" alt="Member" class="member-img" />
                        <div class="member-info">
                          <div class="member-name">Maria Yaltekee</div>
                          <div class="member-role">Graphic Designer</div>
                          <a href="#">
                            <img class="arrow" src="/images/arrow-right.svg">
                          </a>
                        </div>
                      </div>
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