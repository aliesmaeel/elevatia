@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="search_result container">
    {{-- banner --}}
    <div style="position:relative;height: 100vh;" >
        <img src="/images/banner.png" class="banner">
        <div class="search-realestate">
            <div class="desc_title">
                <div class="main_title">Find Your Dream Property</div>
                <div class="desc">   
                    Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to 
                    redefine your life. With categories to suit every dreamer, your journey 
                </div>
            </div>
        </div>
    </div>
    <div class="content_result">
        <div class="content first_section">
            @include('components.seachProperty')
            <a class="reset_filter" href="#">
                Reset all filters
            </a>
            <div class="desc_text">
                Dubai’s property market offers an exceptional variety of homes suited...
                <br>
                <b>
                    <span>1094</span>results
                </b>
            </div>
            <div class="grid-container">
                @include('components.service')
            </div>
         </div>
    </div>
    <div class="bg_empty"></div>
    <div class="question">
        <div class="content">
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
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection