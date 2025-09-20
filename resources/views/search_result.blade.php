@extends('layouts.master')

@section('title', 'Search Results')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="search_result container">
        {{-- banner --}}
        <div style="position:relative;height: 100vh;">
            <img src="/images/banner.png" class="banner">
            <div class="search-realestate">
                <div class="desc_title">
                    <div class="main_title">Find Your Dream Property</div>
                    <div class="desc">
                        Welcome to Elevatia, where your dream property awaits in every corner of our beautiful world.
                        Explore our curated selection of properties, each offering a unique story and a chance to
                        redefine your life. With categories to suit every dreamer, your journey
                    </div>
                </div>
            </div>
        </div>
        <div class="content_result">
            <div class="content first_section">
                @include('components.searchProperty')
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
                <div class="grid-container" data-aos="fade-up">
                    @foreach($properties as $property)
                        @include('components.service', ['property' => $property])
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
