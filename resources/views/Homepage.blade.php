@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="home_page container">
            <div style="position:relative;height: 110vh;">
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
                </div>
            </div>
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection