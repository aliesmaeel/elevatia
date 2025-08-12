@extends('layouts.master')
@section('title', 'Blogs')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="blogs_page container blog">
    {{-- banner --}}
    <div style="position:relative;height: 100vh;" >
        <img src="/images/banner.png" class="banner">
        <div class="search-realestate">
            <div class="desc_title">
                <div class="main_title">Search Luxury Homes In Dubai</div>
                <div class="desc">   
                    Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.
                </div>
            </div>
        </div>
    </div>
    <div class="content_result">
        <div class="content">
            <div class="first_section">
                <form class="form_search"  method="">
                @include('components.search_box')
                </form>
                <div class="desc_text">
                    Dubai’s property market offers an exceptional variety of homes suited...
                    <br>
                    <b>
                        <span>1094</span>results
                    </b>
                </div>
            </div>
            
            <div class="grid-container" data-aos="fade-up">
                @include('components.blog_item')
            </div>
         </div>
    </div>
    <div class="bg_empty"></div>

</div>
@endsection

{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection