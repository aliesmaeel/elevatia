@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css"/>

<style>
    .property_details .content .flex_container .col:first-of-type{
        grid-row: span 1 !important;
    }

    /* Popup overlay */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    /* Hidden by default */
    .hidden2 {
        display: none;
    }

    /* Popup box */
    .popup-content {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        width: 400px;
        max-width: 90%;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
        position: relative;
        animation: popupFade 0.3s ease;
    }

    /* Close button */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
        color: #333;
    }

    /* Form styles */
    form .form-group {
        margin-bottom: 15px;
    }

    form label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
    }

    form input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        outline: none;
    }

    .phone-input {
        display: flex;
        gap: 10px;
    }

    .phone-input input {
        flex: 1;
    }

    .submit-btn {
        width: 100%;
        background: #f77f00;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .submit-btn:hover {
        background: #e56b00;
    }

    /* Animation */
    @keyframes popupFade {
        from {opacity: 0; transform: scale(0.95);}
        to {opacity: 1; transform: scale(1);}
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
                                <div  class="sub_num_Pay">{{$property->first_installment}}</div>
                            </div>
                            <div class="col">
                                <img src="/images/settings_bold.svg">
                                <div  class="sub_title_Pay">Under Construction</div>
                                <div  class="sub_num_Pay">{{$property->under_construction}}</div>
                            </div>
                            <div class="col">
                                <img src="/images/key_bold.svg">
                                <div  class="sub_title_Pay">On Handover</div>
                                <div  class="sub_num_Pay">{{$property->on_handover}}</div>
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
                            <a class="btn" target="_blank" href="https://wa.me/+971562676761">
                                Discover more
                            </a>
                            <a class="btn" href="javascript:void(0)" onclick="openBrochurePopup()">
                                Download brochure
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="brochurePopup" class="popup-overlay hidden2">
        <div class="popup-content">
            <span class="close-btn" onclick="closeBrochurePopup()">&times;</span>
            <h2>Download Brochure</h2>
            <form id="brochureForm" method="POST" action="{{ route('downloaded-brochure.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>


                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"></script>

<script>
    function openBrochurePopup() {
        document.getElementById("brochurePopup").classList.remove("hidden2");
    }

    function closeBrochurePopup() {
        document.getElementById("brochurePopup").classList.add("hidden2");
    }

    document.addEventListener("DOMContentLoaded", function() {
        const phoneInput = document.querySelector("#phone");

        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => success(data.country_code))
                    .catch(() => success("US"));
            },
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js", // for validation/formatting
        });

        // On form submit, get full international number
        const form = document.querySelector("#brochureForm");
        if (form) {
            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const fullNumber = iti.getNumber(); // E.164 format: +971123456789
                const formData = new FormData(form);
                formData.set("phone", fullNumber); // replace phone input value with full number

                fetch(form.action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    }
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data === true) {
                            window.location.href = "{{ asset('/storage/'.$property->brochure) }}";
                            closeBrochurePopup();
                        }
                    })
                    .catch(err => console.error(err));
            });
        }
    });




</script>


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
