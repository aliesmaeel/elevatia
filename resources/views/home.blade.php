@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="home_page container home_only">
        {{-- banner --}}
            <div style="position:relative;height: 110vh;z-index: 1;" >
                <img src="{{asset('/storage/'.$home->banner)}}" class="banner">
                <div class="search-realestate">
                    <div class="desc_title">
                        <div class="main_title">Search Luxury Homes In Dubai</div>
                        <div class="desc">   Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.</div>
                    </div>
                </div>
            </div>
            <div class="bg_global">
                @include('components.searchProperty')

                {{-- about --}}
                <div class="about-section">
                        <div class="content"data-aos="fade-up"  >
                            <div class="text-content col-flex" >
                                <div class="title">ABOUT ELEVATIA</div>
                                <div class="desc">
                                    {{$home->about_elevatia}}
                                </div>
                            </div>
                        </div>
                </div>

                {{-- vision --}}
                <div class="about-section after_about">
                    <div class="content"data-aos="fade-up" >
                        <div class="text-content col-flex" >
                            <div class="title">Our Vision</div>
                            <div class="desc">
                                {{$home->our_vision}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-section">
                    <div class="content"data-aos="fade-up" >
                        <div class="text-content col-flex" >
                            <div class="title">Our Mission</div>
                            <div class="desc">
                                {{$home->our_mission}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_empty"></div>

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
                        @foreach ($premiumProperties as $property)
                        <x-service :property="$property" />
                        @endforeach
                    </div>
                    <div class="main_pagination">
                        @include('components.pagination', ['paginator' => $premiumProperties])
                    </div>
                </div>
            </div>

            {{-- EXPLORE RECENT OFF PLAN PROJECTS --}}
            <div class="offplan_projects">
                <div class="content" data-aos="fade-up">
                    <div class="text-content">
                        <div class="title">
                            EXPLORE RECENT OFF PLAN PROJECTS
                        </div>
                        <div class="desc">
                            Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes
                            and investments available through Estatein. Click "View Details" for more information.
                        </div>
                    </div>
                    <div class="main_content">
                        <div class="flex_container first_grid">
                            <div class="col">
                                <img src="/images/off_plan_1.png">
                            </div>
                            <div class="col">
                                <img src="/images/off_plan_2.png">
                            </div>
                        </div>
                        <div class="flex_container second_grid">
                            <div class="col">
                                <img src="/images/offplan_3.png">

                            </div>
                            <div class="col">
                                <img src="/images/off_plan_4.png">

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="our_expert">
                <div class="content" data-aos="fade-up">
                    <div class="text-content">
                        <div class="title">
                            Our Team
                        </div>
                        <div class="desc">
                            Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and
                            investments available through Estatein. Click "View Details" for more information.
                        </div>
                    </div>
                    {{-- our expert  --}}
                    <div class="swiper_expert">


                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                @foreach($agents as $agent)
                                <div class="swiper-slide">
                                    <img src="{{asset('/storage/'.$agent->image)}}" alt="Member" class="member-img" />
                                    <div class="member-info">
                                        <div class="member-name">{{$agent->name}}</div>
                                        <div class="member-role">{{$agent->position}}</div>
                                        <a href="#">
                                            <img class="arrow" src="/images/arrow-right.svg">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>




                    </div>
                </div>
            </div>

            {{-- Our Blogs --}}
            <div class="blog">
                <div class="content" data-aos="fade-up">
                    <div class="title">Our Blogs</div>
                    <div class="grid-container">
                        @foreach($blogs as $blog)
                        <x-blog_item :blog="$blog" />
                        @if($loop->iteration == 4)

                            <div class="blog_2_box col">
                                <div class="title_box">Experience Effortless Property Management</div>
                                <div class="desc_box">
                                    Ready to experience hassle-free property management? Explore our Property Management Service categories and let us
                                    handle the complexities while you enjoy the benefits of property ownership.
                                </div>

                                <a href="/blogs">
                                    <div>See All</div>
                                </a>

                                <img src="/images/bt.png" class="abs_img">

                            </div>
                        @endif
                        @endforeach
                    </div>

                </div>
            </div>

    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
