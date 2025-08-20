@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="property_details container team_details our_team_page about_page">
        <div class="content" >
           <div class="grid_container details_section">
                <div class="pic col">
                    <img src="/images/team_details.png">
                </div>
                <div class="info_desc col">
                    <div class="name_team">
                        Wade Warren
                    </div>
                    <div class="pos">
                        Property Consultant
                    </div>
                    <div class="title">
                        <div class="line"></div>
                        <div class="">
                            About  wade Warren
                        </div>
                    </div>
                    <div class="desc">
                        Doctor of Science in International Law, an excellent negotiator and diplomat,
                         Dimitry is able to gently but confidently defend the interests of clients.
                          Dimitry has over 10 years of international experience in the real estate industry.Doctor of Science in International Law, an excellent negotiator and diplomat,
                         Dimitry is able to gently but confidently defend the interests of clients.
                          
                    </div>
                </div>
            </div>
        </div>
        <div class="box_details">
            <div class="box_container" data-aos="fade-up">
                <div class="grid_container">
                    <div class="col">
                        <img src="/images/editing.svg">
                        <div class="title">Experience</div>
                        <div class="desc">15 years</div>
                    </div>
                    <div class="col">
                        <img src="/images/specialist_user.svg">
                        <div class="title">Specialization</div>
                        <div class="desc">Primary Market</div>
                    </div>
                    <div class="col">
                        <img src="/images/language.svg">
                        <div class="title">Language</div>
                        <div class="desc">English, Russian</div>
                    </div>

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

        {{-- Testimonials --}}
        <div class="content content_testimonials">
            <div class="testimonials_section titles_section" data-aos="fade-up">
                <div class="title">Testimonials</div>
                <div class="title2">
                    <div class="flex">
                        <div>Testimonials</div> 
                    </div>
                </div>
                <div class="desc">Every day we communicate with each other, solve our clients’ problems and work hard to succeed their business.</div>
                 {{-- Testimonials swiper  --}}
                <div class="swiper_testimonials">
                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev">Prev</div>
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their digital marketing strategies helped us reach new customers and increase our revenue by 30% within just a few months. Highly recommended!</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi.png">
                                    <div class="flex_col">
                                        <div class="name">Jennifer Lee</div>
                                        <div class="pos_testi">CEO of BlueBloom</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate as needed -->
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their digital marketing strategies helped us reach new customers and increase our revenue by 30% within just a few months. Highly recommended!</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi2.png">
                                    <div class="flex_col">
                                        <div class="name">Wade Warren</div>
                                        <div class="pos_testi">Art Director</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their web design team created a stunning website that perfectly captured our brand's essence. The feedback from our customers has been overwhelmingly positive.</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi.png">
                                    <div class="flex_col">
                                        <div class="name">Lisa Williams</div>
                                        <div class="pos_testi">CEO Of HealthTech</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their digital marketing strategies helped us reach new customers and increase our revenue by 30% within just a few months. Highly recommended!</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi.png">
                                    <div class="flex_col">
                                        <div class="name">Jennifer Lee</div>
                                        <div class="pos_testi">CEO of BlueBloom</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their digital marketing strategies helped us reach new customers and increase our revenue by 30% within just a few months. Highly recommended!</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi.png">
                                    <div class="flex_col">
                                        <div class="name">Jennifer Lee</div>
                                        <div class="pos_testi">CEO of BlueBloom</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonials-info flex_col">
                                <div class="title_slide">NexGen turned our business around!</div>
                                <div class="desc_slide">Their digital marketing strategies helped us reach new customers and increase our revenue by 30% within just a few months. Highly recommended!</div>  
                            </div>
                            <div class="second_section bg_dark">
                                <div class="flex">
                                    <img src="/images/testi.png">
                                    <div class="flex_col">
                                        <div class="name">Jennifer Lee</div>
                                        <div class="pos_testi">CEO of BlueBloom</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- book_view --}}
        <div class="content">
            <div class="book_view" data-aos="fade-up">
                <div class="cont">
                    <div class="main_title">Talk To An Expert</div>
                    <div class="desc">
                        Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to
                         find your perfect match. Don't wait; let's embark on this exciting journey together.
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