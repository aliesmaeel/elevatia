@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="property_details container offplan_details_page">
        <div class="overlay_orange"></div>
        <div class="content" >
            <div class="flex_container start_align" id="images_details"> 
                <!-- Images will be injected dynamically -->
            </div>
            
            <div class="flex_container grid_desc" data-aos="fade-up">
                <div class="col big">
                    <div class="title max-width">Description</div>
                    <div class="desc max-width" >
                        Discover your own piece of paradise with the Seaside Serenity Villa. T With an open floor 
                        planplanpla, breathtaking ocean views from every room, and direct access
                         to a pristine sandy beach,
                        this property is the epitome of coastal living.Discover your own piece of
                         paradise with the Seaside Serenity Villa. T With an open floor plan, 
                         breathtaking ocean views from every room, and direct access to a pristine
                          sandy beach, this property is the epitome of coastal living.Discover your 
                          own piece of paradise with the
                         Seaside Serenity VillSeaside Serenity VillSeaside Serenity VillSeaside Serenity Villa.
                    </div>
                    {{-- Jumeirah Asora Bay Experts --}}
                    <div class="our_expert">
                            <div class="title">OUR EXPERT</div>
                            <div class="swiper_expert_offplan">
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

                    {{-- Paymant Plans --}}
                    <div class="paymant_plans" data-aos="fade-up">
                        <div class="title">Paymant Plans</div>
                        <div class="boxes_paymant_plans">
                            <div class="col">
                                <img src="/images/power.svg">
                                <div  class="sub_title_Pay">First Installment</div>
                                <div  class="sub_num_Pay">50 %</div>
                            </div>
                            <div class="col">
                                <img src="/images/settings_bold.svg">
                                <div  class="sub_title_Pay">Under Construction</div>
                                <div  class="sub_num_Pay">50 %</div>
                            </div>
                            <div class="col">
                                <img src="/images/key_bold.svg">
                                <div  class="sub_title_Pay">On Handover</div>
                                <div  class="sub_num_Pay">50 %</div>
                            </div>
                        </div>
                    </div>
                    {{-- features --}}
                    <div class="features" data-aos="fade-up">
                        <div class="title">Features & amenities</div>
                        <div class="grid_features">
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white_bold.svg">
                                    <span>Built-in kitchen appliances</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white_bold.svg">
                                    <span>Shared gym</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white_bold.svg">
                                    <span>Shared gym</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bathroom_bold.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bathroom_bold.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bathroom_bold.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk_bold.svg">
                                    <span>Children's play area</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk_bold.svg">
                                    <span>Walk-in closet</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk_bold.svg">
                                    <span>Children's play area</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    {{-- Location --}}
                    <div class="maps-section" data-aos="fade-up">
                        <div class="title">Our Location</div>
                        <div id="map-container">
                            <!-- Map will be inserted here -->
                        </div>
                    </div>
                </div>
                <div class="col small" data-aos="fade-up">
                    <div class="starting_price">
                        <div class="title">Starting Price</div>
                        <div class="price_sta">
                            <span>AED</span>
                             45M
                        </div>
                        <div class="flex-col">
                            <div class="flex_row">
                                <div class="sub_title">Completion :</div>
                                <div class="sub_desc">Q1-2001</div>
                            </div>
                            <div class="flex_row">
                                <div class="sub_title">Title type : </div>
                                <div class="sub_desc">Freehold</div>
                            </div>
                            <div class="flex_row">
                                <div class="sub_title">Lifestyle :</div>
                                <div class="sub_desc">Standard</div>
                            </div>
                            <div class="flex_row">
                                <div class="sub_title">Developer :</div>
                                <div class="sub_desc">Meraas</div>
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="btn" href="#">
                                Discover more
                            </a>
                            <a class="btn" href="#">
                                Download brochure
                            </a>
                        </div>
                       
                    </div>
                    

                </div>
               
            </div>
            <div class="question" >
                <div class="content" data-aos="fade-up">
                    <giv class="grid_container">
                        <div class="text">
                            <div class="title">Frequently Asked <br>Question</div>
                            <div class="desc">Trusted in more than 100 countries and <br>4 million customers.</div>
                        </div>
                        <div class="question_container">
                            <div class="faq">
                                <div class="faq-item active">
                                  <button class="faq-question">
                                    How do I update my billing information?
                                    <img src="/images/arrow_white.svg" class="faq-icon white">
                                    <img src="/images/arrow_orange.svg" class="faq-icon orange">
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                      Proin nec ante vitae purus tempus egestas. Curabitur euismod
                                      purus sed elit faucibus. Vivamus in ante sed libero feugiat fermentum.
                                    </p>
                                  </div>                                             
                                </div>
                              
                                <div class="faq-item">
                                    <button class="faq-question">
                                        How do I update my billing information?
                                        <img src="/images/arrow_white.svg" class="faq-icon white">
                                        <img src="/images/arrow_orange.svg" class="faq-icon orange">
                                    </button>
                                    <div class="faq-answer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Proin nec ante vitae purus tempus egestas. Curabitur euismod
                                            purus sed elit faucibus. Vivamus in ante sed libero feugiat fermentum.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <button class="faq-question">
                                        How do I update my billing information?
                                        <img src="/images/arrow_white.svg" class="faq-icon white">
                                        <img src="/images/arrow_orange.svg" class="faq-icon orange">
                                    </button>
                                    <div class="faq-answer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Proin nec ante vitae purus tempus egestas. Curabitur euismod
                                            purus sed elit faucibus. Vivamus in ante sed libero feugiat fermentum.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <button class="faq-question">
                                        How do I update my billing information?
                                        <img src="/images/arrow_white.svg" class="faq-icon white">
                                        <img src="/images/arrow_orange.svg" class="faq-icon orange">
                                    </button>
                                    <div class="faq-answer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Proin nec ante vitae purus tempus egestas. Curabitur euismod
                                            purus sed elit faucibus. Vivamus in ante sed libero feugiat fermentum.
                                        </p>
                                    </div>
                                </div>
                              
                                <div class="faq-item">
                                    <button class="faq-question">
                                        How do I update my billing information?
                                        <img src="/images/arrow_white.svg" class="faq-icon white">
                                        <img src="/images/arrow_orange.svg" class="faq-icon orange">
                                    </button>
                                    <div class="faq-answer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Proin nec ante vitae purus tempus egestas. Curabitur euismod
                                            purus sed elit faucibus. Vivamus in ante sed libero feugiat fermentum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                              
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection