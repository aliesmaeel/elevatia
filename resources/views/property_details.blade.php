@extends('layouts.master')
@section('title', 'Details')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
    <div class="property_details container">
        <div class="content">
           <div class="flex-row">
                <div class="name">High-rise Townhouse In califorlia</div>
                <div class="price">$425,000 </div>
           </div>
           <div class="flex-row">
                <div class="first">
                    <div class="status">for Rent</div>
                    <div class="images_stars">
                        <img src="/images/star.svg">
                        <img src="/images/star.svg">
                        <img src="/images/star.svg">
                        <img src="/images/star.svg">
                    </div>
                    <div class="num_review">
                        (2 Reviews)
                    </div>
                </div>
                <div class="second">
                    1,200/Sq Ft
                </div>
            </div>
            <div class="flex-row">
                <div class="first">
                    <img src="/images/location.svg">
                    <div>Southwestern Ontario, Ontario, Canada</div>
                </div>
            </div>
            <div class="flex_container">
                <div class="col">
                    <img src="/images/house.png">
                </div>
                <div class="col">
                    <img src="/images/house.png">
                    <img src="/images/house.png">
                </div>
                <div class="col">
                    <img src="/images/house.png">
                    <img src="/images/house.png">
                </div>
            </div>
            <div class="flex_container grid_desc">
                <div class="col big">
                    <div class="title">Description</div>
                    <div class="desc">
                        Discover your own piece of paradise with the Seaside Serenity Villa. T With an open floor 
                        planplanpla, breathtaking ocean views from every room, and direct access
                         to a pristine sandy beach,
                        this property is the epitome of coastal living.Discover your own piece of
                         paradise with the Seaside Serenity Villa. T With an open floor plan, 
                         breathtaking ocean views from every room, and direct access to a pristine
                          sandy beach, this property is the epitome of coastal living.Discover your 
                          own piece of paradise with the
                         Seaside Serenity VillSeaside Serenity VillSeaside Serenity VillSeaside Serenity Villa.
                    </div>
                    <div class="details">
                        <div class="flex_col">
                            <div>
                                <img src="/images/bedroom_white.svg">
                                <span>2</span>
                            </div>
                            <div>Bedrooms</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/bath_white.svg">
                                <span>2</span>
                            </div>
                            <div>Bathrooms</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/car.svg">
                                <span>2</span>
                            </div>
                            <div>Garage</div>
                        </div>
                        <div class="flex_col">
                            <div>
                                <img src="/images/year.svg">
                                <span>2022</span>
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
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white.svg">
                                    <span>Built-in kitchen appliances</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white.svg">
                                    <span>Shared gym</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bedroom_white.svg">
                                    <span>Shared gym</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bath_white.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bath_white.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/bath_white.svg">
                                    <span>Shared spa</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk.svg">
                                    <span>Children's play area</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk.svg">
                                    <span>Walk-in closet</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="flex">
                                    <img src="/images/walk.svg">
                                    <span>Children's play area</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator">
                        <div class="content">
                            <div class="title">Mortgage Calculator</div>
                            <div class="text">Estimate your monthly mortgage payments</div>
                            <form>
                                <div class="grid_content">
                                    <div class="input_box">
                                        <div class="text">Property Price</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                             <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Deposit</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                             <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Mortgage Period</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="23">
                                            <span>Years</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Interest Rate</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="23">
                                            <span>Years</span>
                                        </div>
                                    </div>
                                    <div class="input_box submit_col">
                                        <input type="submit" value="Get Pre - approved">
                                    </div>
                                </div>
                            </form>
                            <div class="payment_value">
                                <div>Monthly Payment</div>
                                <div>AED 13,329</div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator">
                        <div class="content">
                            <div class="title">Rental Yield Calculator</div>
                            <div class="text">Calculate the gross and net rental yields on a property.</div>
                            <form>
                                <div class="grid_content">
                                    <div class="input_box">
                                        <div class="text">Property Price</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                             <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Annual services charges</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                             <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Additional charges</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                            <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box">
                                        <div class="text">Annual rental price</div>
                                        <div class="input_div">
                                            <input type="text" placeholder="2,850,000">
                                            <span>AED</span>
                                        </div>
                                    </div>
                                    <div class="input_box submit_col">
                                        <input type="submit" value="Get Pre - approved">
                                    </div>
                                </div>
                            </form>
                            <div class="payment_value">
                                <div class="flex">
                                    <div>
                                        <div>Net Rent</div>
                                        <div class="numb">AED 13,329</div>
                                    </div>
                                    <div>
                                        <div>NET ROI</div>
                                        <div class="numb">6.00%</div>
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
                            <div class="name">High-rise Townhouse</div>
                        </div>
                        <div class="flex">
                            <div class="status">for Rent</div>
                            <div class="images_stars">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                                <img src="/images/star.svg">
                            </div>
                            <div class="num_review">
                                (2 Reviews)
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/location.svg">
                            <div class="fit">Southwestern Ontario, Ontario, Canada</div>
                        </div>
                        <div class="flex">
                            <div class="price"><span>$425,000</span> 1,200/sq ft</div>
                        </div>
                        <hr>
                        <div class="contact_box">
                            <div class="title">Contact with us now !</div>
                            <div class="white_bg">
                                <div class="flex">
                                    <img src="/images/user_img.png">
                                    <div class="flex-col">
                                        <div class="name">Rachel dan </div>
                                        <a class="tel">
                                            <img src="/images/ph_phone.svg">
                                            <span>0485.526.258</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex btn">
                                    <a>Call now</a>
                                    <a>Send a message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="similar_boxs">
                        <div class="main_title">Similar Listings :</div>
                        @include('components.similar_box')

                    </div>

                </div>
               
            </div>
            <div class="box_average">
                <div class="cont">
                    <div class="main_title">Average prices</div>
                    <div class="flex_container first_titles">
                        <div>Size</div>
                        <div>Price</div>
                    </div>
                    {{-- group 1 --}}
                    <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>

                     {{-- group 2 --}}
                     <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>

                     {{-- group 3 --}}
                     <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>


                     {{-- group 4 --}}
                     <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>


                     {{-- group 5 --}}
                     <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>


                     {{-- group 6 --}}
                     <div class="flex_container">
                        <div class="size_flex">
                            <div class="flex"> 
                                <div>1 Bedroom</div>
                                <div>
                                    <a href="#">View options</a>
                                </div>
                            </div>
                        </div>
                        <div class="price_flex">
                            <div class="flex"> 
                                <div>from 0.99mto 2m</div>
                                <div>avg. AED 1m</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book_view">
                <div class="cont">
                    <div class="main_title">Book your viewing</div>
                    <div class="desc">
                        Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect
                         match. Don't wait; let's embark on this exciting journey together.
                    </div>
                    <form id="contactForm_view">
                        <div class="grid_container">
                            <div class="col">
                                <div class="desc_text">Full Name</div>
                                <div class="input_div">
                                    <input type="text" placeholder="Enter First Name"/>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col">
                                <div class="desc_text">Your Phone</div>
                                <div class="input_div">
                                    <img src="/images/ph_white.svg">
                                    <input type="text" id="phoneInput" placeholder="Enter Your Number"/>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col">
                                <div class="desc_text">Your Email</div>
                                <div class="input_div">
                                    <img src="/images/email_white.svg">
                                    <input type="text" placeholder="Enter Your Email"/>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col select_group">
                                <div class="desc_text">Preferred Time</div>
                                <div class="input_div">
                                    <select id="time" name="time">
                                        <option value="">Select Time</option>
                                        <option value="option1">option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3">option3</option>
                                      </select>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col select_group">
                                <div class="desc_text">Preferred Date</div>
                                <div class="input_div">
                                    <select id="date" name="date">
                                        <option value="">Select Date</option>
                                        <option value="option1">option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3">option3</option>
                                      </select>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col select_group">
                                <div class="desc_text">Property Type</div>
                                <div class="input_div">
                                    <select id="type" name="type">
                                        <option value="">Select Type</option>
                                        <option value="option1">option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3">option3</option>
                                      </select>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <div class="col col_3">
                                <div class="desc_text">Message</div>
                                <div class="input_div">
                                    <textarea placeholder="Enter your Message here.." cols="3" rows="5"></textarea>
                                </div>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            
                        </div>
                        <div class="flex_container">
                            <div class="checkbox_div">
                                <label>
                                    <input type="checkbox" id="agreeCheckbox"> I agree to the terms and conditions
                                </label>
                                <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
                            </div>
                            <button class="submit_view" type="submit">Send Your Message</button>
                        </div>
                        <img src="/images/bt.png" class="abs_img">
                    </form>
                </div>
            </div>
       
        
        </div>
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection