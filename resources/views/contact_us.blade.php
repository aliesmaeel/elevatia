@extends('layouts.master')

@section('title', 'Contact Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="contact_us container">
        
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
        <div class="get_started">
            <div class="content" data-aos="fade-up">
                <div class="title">Get Started</div>
                <div class="desc">
                    Take the first step towards achieving your real estate goals by talking 
                        to our team. Whether you are involved in residential or commercial  transactions or 
                    considering relocation, we have the support and systems  for your success.
                </div>
                <div class="grid-container">
                    <div class="col">
                        <img src="/images/icon_globe.svg">
                        <div class="sub_title">Address</div>
                        <div class="sub_desc">27 Division St, New York, NY 10002, USA27 Division St, New York, NY 10002, USA</div>
                    </div>
                    <div class="col">
                        <img src="/images/icon_chat.svg">
                        <div class="sub_title">Hit us up</div>
                        <div class="sub_desc">
                            <a href="#">+1 845 631 78 49</a>
                            <a href="#">info@sitename.com</a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="/images/icon_clock.svg">
                        <div class="sub_title">Working Schedule:</div>
                        <div class="sub_desc">
                            <div >Mon - Fri: 9 am - 6 pm</div>
                            <div>Sat, Sun: Holiday</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_empty"></div>
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
    </div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection