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
    <div style="position:relative;height: 110vh;" >
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


            <div class="grid-container" data-aos="fade-up">
                @foreach($blogs as $blog)
                    <x-blog_item :blog="$blog" />
                @endforeach
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
