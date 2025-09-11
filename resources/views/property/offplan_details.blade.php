@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

<style>
    .property_details .content .flex_container .col:first-of-type{
        grid-row: span 1 !important;
    }
</style>
{{-- main page --}}
@section('content')
    <div class="property_details container offplan_details_page">
        <div class="overlay_orange"></div>
        <div class="content" >
            <div class="flex_container start_align" id="images_details">
                <!-- Images will be injected dynamically -->
            </div>

            <div class="flex_container grid_desc">
                <div class="col big">
                    <div class="title max-width" data-aos="fade-up">Description</div>
                    <div class="desc max-width" data-aos="fade-up">
                 {!! $property->description !!}

                    </div>
                    {{-- Jumeirah Asora Bay Experts --}}
                    <div class="our_expert" data-aos="fade-up">
                            <div class="title">OUR EXPERT</div>
                            <div class="swiper_expert_offplan">
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


                                <!-- Duplicate as needed -->

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
                        <div style="color: white">
                            {!! $property->features !!}
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
                            <span> {{$property->price_starts_from}} </span>
                        </div>
                        <div class="flex-col">
                            <div class="flex_row">
                                <div class="sub_title">Completion :</div>
                                <div class="sub_desc">{{$property->completion_date}}</div>
                            </div>
                            <div class="flex_row">
                                <div class="sub_title">Developer :</div>
                                <div class="sub_desc">{{$property->developer}}</div>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var lat = {{$property->lat}};
        var lng = {{$property->lng}};
        console.log(lat, lng);

        var mapUrl = "https://www.google.com/maps?q=" + lat + "," + lng + "&hl=en&z=14&output=embed";
        var iframe = document.createElement("iframe");
        iframe.src = mapUrl;
        iframe.width = "100%";
        iframe.height = "400";
        iframe.style.border = "0";
        iframe.setAttribute("allowfullscreen", ""); // ✅ correct way

        document.getElementById("map-container").appendChild(iframe);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var allImages_property = @json($allImages_property);
        var currentIndex_img = 0;
        var container_grid_img = document.getElementById("images_details");
        var perPage = 5;

        if (container_grid_img) {
            function renderImages() {
                container_grid_img.innerHTML = "";
                var slice = allImages_property.slice(currentIndex_img, currentIndex_img + perPage);
                slice.forEach((src, i) => {
                    var col = document.createElement("div");
                    col.className = "col";
                    var img = document.createElement("img");
                    img.src = src;
                    col.appendChild(img);

                    if (i === perPage - 1 && currentIndex_img + perPage < allImages_property.length) {
                        var remaining = allImages_property.length - (currentIndex_img + perPage);
                        var overlay = document.createElement("div");
                        overlay.className = "overlay";
                        overlay.innerText = `+${remaining}`;
                        overlay.onclick = () => {
                            currentIndex_img += perPage;
                            renderImages();
                        };
                        col.appendChild(overlay);
                    }

                    container_grid_img.appendChild(col);
                });
            }

            renderImages();
        }
    });

</script>
{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
