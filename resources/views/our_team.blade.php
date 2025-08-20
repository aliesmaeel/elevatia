@extends('layouts.master')

@section('title', 'Our Team')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="contact_us container about_page our_team_page">
        
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
    {{-- Our Team --}}
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
    <div class="bg_empty"></div>

    {{-- few_words --}}
    <div class="few_words">
        <div class="content" data-aos="fade-up">
            <div class="grid_container">
                <div class="col grid_col">
                    <div class="box_col">
                        <div class="num">235 <span>+</span></div>
                        <div class="text">Setisfied Clients</div>
                    </div>
                    <div class="box_col">
                        <div class="num">15 <span>+</span></div>
                        <div class="text">Awards Winning</div>
                    </div>
                    <div class="box_col">
                        <div class="num">39 <span>+</span></div>
                        <div class="text">Team Members</div>
                    </div>
                    <div class="box_col">
                        <div class="num">354 <span>+</span></div>
                        <div class="text">Successful Projects</div>
                    </div>
                </div>
                <div class="col flex_dir_col">
                    <div class="title f_title">
                        <div class="line"></div>
                        <div>a few words</div>
                        
                    </div>
                    <div class="sub_title">
                        Why choose <br> us
                    </div>
                    <div class="desc">
                        We’ve got a lot of awards for our products and services that became popular in the world.
                    </div>
                    <div class="flex_dir_col">
                        <div class="flex">
                            <img src="/images/check-circle.svg">
                            <div>
                                <div class="title">Modern Technologies</div>
                                <div class="desc">Discussion is an important thing in the development process. Thus new ideas and ingenious solutions are born. </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/check-circle.svg">
                            <div>
                                <div class="title">Huge Digital Experience</div>
                                <div class="desc">Our company has been developing digital products for 15 years. We’ve got a lot of awards for our work.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- talking_expert --}}
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
    @endsection

{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection