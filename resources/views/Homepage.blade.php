@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="home_page container">
            <div style="position:relative;height: 110vh;" >
                <img src="/images/banner.png" class="banner">
                <div class="search-realestate">
                    <div class="desc_title">
                        <div class="main_title">Search Luxury Homes In Dubai</div>
                        <div class="desc">   Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.</div>
                    </div>
                    @include('components.seachProperty')
                </div>
            </div>
            <div class="about-section">
                    <div class="content"  >
                        <div class="text-content col-flex" >
                            <div class="title">ABOUT ELEVATIA</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt 
                                facilisis justo eget elit. Augue montes in eu mollis dictum risus blan eget commodo 
                                amet Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis 
                                justo eget elit. Augue montes in eu mollis dictum risus blan eget commodo amet Lorem ipsum dolor
                                sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit. Augue
                                montes in eu mollis dictum risus blan eget commodo amet Lorem ipsum dolor sit amet consectetur.
                                A fringilla turpis duis eget tincidunt
                                facilisis justo eget elit. Augue montes in eu mollis dictum risus blan eget commodo amet 
                            </div>
                        </div>
                    </div>
            </div>
            <div class="vision">
                <div class="content" >
                    <div class="text-content col-flex" >
                        <div class="title">Our Vision</div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget 
                            tincidunt facilisis justo eget elit. Augue montes in eu mollis dictum ri
                        </div>
                    </div>
                    <div class="grid_container">
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vision">
                <div class="content" >
                    <div class="text-content col-flex" >
                        <div class="title">Our Mission</div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget 
                            tincidunt facilisis justo eget elit. Augue montes in eu mollis dictum ri
                        </div>
                    </div>
                    <div class="grid_container">
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                        <div class="col flex_col">
                            <img src="/images/vision1.svg">
                            <div class="text">
                                <div class="title">Creating Lifelong Partnerships</div>
                                <div class="desc">Lorem ipsum dolor sit amet consectetur fringilla turpis duis eget tincidunt facilisis just</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- premium_properties --}}
            <div class="services">
                <div class="content" data-aos="fade-up" >
                    <div class="title">Premium Properties</div>
                    <div class="desc">Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</div>
                    <div class="container_buttons">
                        <div class="buttons">
                            <div >For Rent </div>
                            <div>For Sale</div>
                            <div>Off Plan</div>
                            <div class="active">All</div>
                        </div>
                    </div>
                    <div class="grid-container">
                        @include('components.service')
                    </div>
                </div>
            </div>
            
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection