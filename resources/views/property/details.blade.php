@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="property_details container">
        <div class="content" >
           <div class="flex-row">
                <div class="name">{{$property->title}}</div>
                <div class="price">{{$property->price}} AED </div>
           </div>
           <div class="flex-row">
                <div class="first">
                    <div class="status">{{\App\Helpers\RealestateTypes::getPropertyStatus()[$property->status]}}</div>
                    <div class="images_stars">
                        @if($property->rating >0 )
                            @for($i=0; $i < min(5, $property->rating); $i++)
                                <img src="/images/star.svg">
                            @endfor
                        @endif

                    </div>
                    <div class="num_review">
                        ({{$property->reviews}} Reviews)
                    </div>
                </div>
                <div class="second">
                    {{$property->size}}/Sq Ft
                </div>
            </div>
            <div class="flex-row" >
                <div class="first">
                    <img src="/images/location.svg">
                    <div>{{$property->address}}</div>
                </div>
            </div>
            <div class="flex_container start_align" id="images_details">
                <!-- Images will be injected dynamically -->
            </div>
            <div class="flex_container grid_desc" data-aos="fade-up">
                <div class="col big">
                    <div class="title max-width">Description</div>
                    <div class="desc max-width">
                       {!! $property->description !!}
                    </div>
                    <div class="details">
                        <div class="flex_col">
                            <div>
                                <img src="/images/bedroom_white.svg">
                                <span>{{$property->bedrooms == 0 ? '' : $property->bedrooms }}</span>
                            </div>
                            <div>{{$property->bedrooms == 0 ? 'Studio' : 'Bedrooms' }}</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/bath_white.svg">
                                <span>{{$property->bathrooms}}</span>
                            </div>
                            <div>Bathrooms</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/car.svg">
                                <span>{{$property->garage}}</span>
                            </div>
                            <div>Garage</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/year.svg">
                                <span>{{$property->build_year}}</span>
                            </div>
                            <div>Year Built</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/area.svg">
                                <span>1,354</span>
                            </div>
                            <div>Area Size</div>
                        </div>
                    </div>
                    <div class="features">
                        <div class="title">Features & amenities</div>
                        <div class="grid_features">
                            @foreach($property->amenities as $aminity)
                                <div class="col">
                                    <div class="flex">
                                        <img style="filter: brightness(5);background-color: white" src="{{asset('storage/'.$aminity->image)}}">
                                        <span>{{$aminity->name}}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
{{--                    <div class="calculator">--}}
{{--                        <div class="content">--}}
{{--                            <div class="title px_2">Mortgage Calculator</div>--}}
{{--                            <div class="text pl_2 top">Estimate your monthly mortgage payments</div>--}}
{{--                            <div >--}}
{{--                                <div class="grid_content">--}}
{{--                                    <div class="input_box">--}}
{{--                                        <div class="text">Property Price</div>--}}
{{--                                        <div class="input_div">--}}

{{--                                            <input  id="price" type="number" class="input" value="{{ str_replace(',', '', $property->price) }}" >--}}
{{--                                             <span>AED</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="input_box">--}}
{{--                                        <div class="text">Deposit</div>--}}
{{--                                        <div class="input_div">--}}
{{--                                            <input id="deposit" type="number" class="input" value="328000" >--}}
{{--                                             <span>AED</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="input_box">--}}
{{--                                        <div class="text">Mortgage Period</div>--}}
{{--                                        <div class="input_div">--}}
{{--                                            <input id="period"  type="number" class="input" value="25" >--}}
{{--                                            <span>Years</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="input_box">--}}
{{--                                        <div class="text">Interest Rate</div>--}}
{{--                                        <div class="input_div">--}}
{{--                                            <input step="1" id="rate" class="input" value="5" >--}}
{{--                                            <span>Years</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="input_box submit_col">--}}
{{--                                        <button onclick="calculateMortgage()" class="input">Get Pre - approved</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="payment_value pl_2">--}}
{{--                                <div>Monthly Payment</div>--}}
{{--                                <div id="result">Monthly Payment: AED 7,670</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="calculator">
                        <div class="content">
                            <div class="title px_2">Rental Yield Calculator</div>
                            <div class="text pl_2 top">Calculate the gross and net rental yields on a property.</div>

                            <div class="grid_content">
                                <div class="input_box">
                                    <div class="text">Property Price</div>
                                    <div class="input_div">

                                        <input type="number" value="{{ str_replace(',', '', $property->price) }}"  id="price" class="input" placeholder="Enter property price">
                                        <span>AED</span>
                                    </div>
                                </div>

                                <div class="input_box">
                                    <div class="text">Annual Services Charges</div>
                                    <div class="input_div">
                                        <input type="number" value="0" id="serviceCharges" class="input" placeholder="Enter service charges">
                                        <span>AED</span>
                                    </div>
                                </div>

                                <div class="input_box">
                                    <div class="text">Additional Charges</div>
                                    <div class="input_div">
                                        <input type="number" value="0" id="extraCharges" class="input" placeholder="Enter additional charges">
                                        <span>AED</span>
                                    </div>
                                </div>

                                <div class="input_box">
                                    <div class="text">Annual Rental Price</div>
                                    <div class="input_div">
                                        <input type="number" value="98400" id="annualRent" class="input" placeholder="Enter annual rental income">
                                        <span>AED</span>
                                    </div>
                                </div>

                                <div class="input_box submit_col">
                                    <button onclick="calculateYield()" class="input">Calculate</button>
                                </div>
                            </div>

                            <div class="payment_value pl_2">
                                <div class="flex">
                                    <div>
                                        <div>Net Rent</div>
                                        <div id="netRent" class="numb">AED 98,400
                                        </div>
                                    </div>
                                    <div>
                                        <div>NET ROI</div>
                                        <div id="netRoi" class="numb">6.00%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col small">
                    <div class="box_details">
                        <div class="flex">
                            <img src="/images/star.svg" class="user_ph">
                            <div class="name">{{$property->title}}</div>
                        </div>
                        <div class="flex">
                            <div class="status">{{\App\Helpers\RealestateTypes::getPropertyStatus()[$property->status]}}</div>
                            <div class="images_stars">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                            </div>
                            <div class="num_review">
                                ({{$property->reviews}} Reviews)
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/location.svg">
                            <div class="fit">{{$property->address}}</div>
                        </div>
                        <div class="flex">
                            <div class="price"><span>AED {{$property->price}}</span> {{$property->size}}/sq ft</div>
                        </div>
                        <hr>
                        <div class="contact_box">
                            <div class="title">Contact with us now !</div>
                            <div class="white_bg">
                                <div class="flex">
                                    <img src="{{asset('/storage/'.$property->agent->image)}}" class="agent_ph">
                                    <div class="flex-col">
                                        <div class="name">{{$property->agent->name}} </div>
                                        <a class="tel">
                                            <img src="/images/ph_phone.svg">
                                            <span>{{$property->agent->phone}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex btn">
                                    <a href="tel:{{$property->agent->phone}}">Call now</a>
                                    <a href="mailto:{{$property->agent->email}}">Send a message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="similar_boxs">
                        <div class="main_title">Similar Listings :</div>
                        @foreach($similarListings as $property)
                            <x-similar_box :property="$property"/>
                        @endforeach

                    </div>

                </div>

            </div>
            <canvas id="pricesChart" height="100"></canvas>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                let type='{{$property->type}}';
                fetch('/average-prices/'+type)
                    .then(res => res.json())
                    .then(data => {
                        const labels = data.map(item => `${item.year}-${String(item.month).padStart(2, '0')}`);
                        console.log(type);
                        const grouped = {};

                        data.forEach(item => {
                            if (!grouped[item.type]) grouped[item.type] = [];
                            grouped[item.type].push(item.avg_price);
                        });

                        const datasets = Object.keys(grouped).map(type => ({
                            label: type,
                            data: grouped[type],
                            borderWidth: 2,
                            fill: false,
                        }));

                        new Chart(document.getElementById('pricesChart'), {
                            type: 'line',
                            data: { labels, datasets },
                            options: {
                                responsive: true,
                                plugins: {
                                    title: { display: true, text: 'Average Property Prices (Hourly)' }
                                },
                                scales: {
                                    y: { title: { display: true, text: 'Price (AED)' } },
                                    x: { title: { display: true, text: 'Date & Hour' } }
                                }
                            }
                        });
                    });
            </script>

            <div class="book_view" data-aos="fade-up">
                <div class="cont">
                    <div class="main_title">Book your viewing</div>
                    <div class="desc">
                        Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect
                         match. Don't wait; let's embark on this exciting journey together.
                    </div>
                    <x-contact_form :type="'review'" />
                </div>
            </div>


        </div>
    </div>



@endsection

<script>
    function calculateMortgage() {
        let price = parseFloat(document.getElementById("price").value);
        let deposit = parseFloat(document.getElementById("deposit").value);
        let years = parseFloat(document.getElementById("period").value);
        let rate = parseFloat(document.getElementById("rate").value);

        if (isNaN(price) || isNaN(deposit) || isNaN(years) || isNaN(rate)) {
            document.getElementById("result").innerText = "Please fill in all fields.";
            return;
        }

        let loanAmount = price - deposit;
        let monthlyRate = rate / 100 / 12;
        let numberOfPayments = years * 12;

        // Mortgage formula: M = P * r * (1+r)^n / ((1+r)^n - 1)
        let monthlyPayment = loanAmount * monthlyRate * Math.pow(1 + monthlyRate, numberOfPayments) / (Math.pow(1 + monthlyRate, numberOfPayments) - 1);

        if (isNaN(monthlyPayment) || !isFinite(monthlyPayment)) {
            document.getElementById("result").innerText = "Monthly Payment: AED 0";
        } else {
            document.getElementById("result").innerText = "Monthly Payment: AED " + monthlyPayment.toLocaleString(undefined, {maximumFractionDigits: 0});
        }
    }


    function calculateYield() {
        let price = parseFloat(document.getElementById("price").value);
        let serviceCharges = parseFloat(document.getElementById("serviceCharges").value);
        let extraCharges = parseFloat(document.getElementById("extraCharges").value);
        let annualRent = parseFloat(document.getElementById("annualRent").value);

        if (isNaN(price) || isNaN(serviceCharges) || isNaN(extraCharges) || isNaN(annualRent)) {
            alert("Please fill in all fields correctly.");
            return;
        }

        let totalCharges = serviceCharges + extraCharges;
        let netRent = annualRent - totalCharges;
        let netRoi = (netRent / price) * 100;

        document.getElementById("netRent").innerText = "AED " + netRent.toLocaleString(undefined, {maximumFractionDigits: 2});
        document.getElementById("netRoi").innerText = netRoi.toFixed(2) + "%";
    }

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
