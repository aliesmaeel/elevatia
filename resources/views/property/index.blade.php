@extends('layouts.master')

@section('title', 'Offplan')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="search_result container offplan_page">
        {{-- banner --}}
        <div style="position:relative;height: 100vh;" >
            <img src="/images/banner.png" class="banner">
            <div class="search-realestate">
                <div class="desc_title">
                    <div class="main_title">Find Your Dream Property</div>
                    <div class="desc">
                        Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and
                        a chance to redefine your life. With categories to suit every dreamer, your journey
                    </div>
                </div>
            </div>
        </div>
        <div class="content_result">
            <div class="content first_section">
                @include('components.searchProperty')


                <div class="grid-container" data-aos="fade-up">
                    @foreach($properties as $property)
                        <x-service :property="$property"/>
                    @endforeach
                </div>

                <div class="main_pagination">
                    @include('components.pagination', ['paginator' => $properties])
                </div>

            </div>
        </div>
        <div class="bg_empty"></div>
        <div class="sign_up">
            <div class="content" data-aos="fade-up">
                <div class="flex_col">
                    <div class="title">Sign up for our newsletter to stay up to date on the Dubai property market.</div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet consectetur. A fringilla turpis duis eget tincidunt facilisis justo eget elit.
                        Augue montes in eu mollis dictum risus blan eget commodo amet
                    </div>
                    <form class="signup_email_form">
                        <div class="contact_email">
                            <div class="flex">
                                <img src="/images/Vector.svg" class="left_s">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">

                            </div>

                            <button type="submit">
                                Subscribe<img src="/images/send_white.svg">
                            </button>
                        </div>
                        <span class="email_error" style="color:#CEA669; display: none; font-size: 14px;">Please enter a valid email.</span>
                    </form>
                    <img src="/images/bt.png" class="abs_img">

                </div>
            </div>
        </div>


    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection


