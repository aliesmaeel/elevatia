<form class="form_search"  method="">
    {{-- search --}}
    <div class="input-search">
        <div class="content">
            <input type="text" placeholder="Search For A Property" name="search" class="search_input"/>
            <div class="submit_btn">
                <img src="/images/Icon.svg">
                <input type="submit" value="Find Property" class="submit">
            </div>
        </div>
        
    </div>
    <div style="display: flex;justify-content:center;flex-wrap:wrap;gap:0.5rem;margin-top:1rem">
        {{-- type --}}
        <div class="dropdown">
            <div class="type-option options-selected"> 
                <div class="flex">
                    <img src="/images/home_icon.svg">
                    <div  class="text_before"> Property Type</div>  
                </div>
                <img src="/images/arrow.svg">

            </div>
            <div class="abs abs-type">
                <div class="flex col">
                    <div class="title">Property type</div>
                    <div class="group-options property-type">
                        <div class="option active">
                            <div class="custom-radio" data-value="Flat">Labor Accommodation</div>
                            <input type="radio" value="Flat" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Residential Apartments</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Commercial Office Spaces</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Showrooms</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Flat</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Bungalow</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Compound</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="Bulk Units">Duplex</div>
                            <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                        </div>
                        <input type="hidden" id="property_type">
                    </div>
                    <div class="reset_done">
                        <div class="reset">Reset</div>
                        <div class="done">Done</div>
                    </div>
                </div>
            </div>
        </div>
   
        {{-- Bathrooms --}}
        <div class="dropdown">
            <div class="bedroom-option options-selected">
                    <div class="flex">
                        <img src="/images/bathroom.svg">
                        <div class="text_before"> Bathrooms</div>  
                    </div>
                    <img src="/images/arrow.svg">
            </div>
            <div class="abs abs-bedroom">
                <div class="flex col">
                    <div class="title">Bathrooms</div>
                    <div class="group-options bathroom-group">
                        <div class="option active">
                            <div class="custom-radio" data-value="any">Any</div>
                            <input type="radio" value="any" name="bathrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="1 Bathroom">1 Bathroom</div>
                            <input type="radio" value="1 Bathroom" name="bathrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="2 Bathrooms">2 Bathrooms</div>
                            <input type="radio" value="2 Bathrooms" name="bathrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="3 Bathrooms">3 Bathrooms</div>
                            <input type="radio" value="3 Bathrooms" name="bathrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="4 Bathrooms">4 Bathrooms</div>
                            <input type="radio" value="4 Bathrooms" name="bathrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="5 Bathrooms">5 Bathrooms</div>
                            <input type="radio" value="5 Bathrooms" name="bathrooms" style="display: none;">
                        </div>
                        <input type="hidden" id="bathrooms">
                    </div>
                    <div class="reset_done">
                        <div class="reset">Reset</div>
                        <div class="done">Done</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bedrooms --}}
        <div class="dropdown">
            <div class="bedroom-option options-selected">
                    <div class="flex">
                        <img src="/images/bedroom.svg">
                        <div class="text_before"> Bedrooms</div>  
                    </div>
                    <img src="/images/arrow.svg">
            </div>
            <div class="abs abs-bedroom">
                <div class="flex col">
                    <div class="title">Bedrooms</div>
                    <div class="group-options bathroom-group">
                        <div class="option active">
                            <div class="custom-radio" data-value="any">Any</div>
                            <input type="radio" value="any" name="bedrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="1 Bedroom">1 Bedroom</div>
                            <input type="radio" value="1 Bedroom" name="bedrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="2 Bedrooms">2 Bedrooms</div>
                            <input type="radio" value="2 Bedrooms" name="bedrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="3 Bedrooms">3 Bedrooms</div>
                            <input type="radio" value="3 Bedrooms" name="bedrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="4 Bedrooms">4 Bedrooms</div>
                            <input type="radio" value="4 Bedrooms" name="bedrooms" style="display: none;">
                        </div>
                        <div class=" option">
                            <div class="custom-radio" data-value="5 Bedrooms">5 Bedrooms</div>
                            <input type="radio" value="5 Bedrooms" name="bedrooms" style="display: none;">
                        </div>
                        <input type="hidden" id="bedrooms">
                    </div>
                    <div class="reset_done">
                        <div class="reset">Reset</div>
                        <div class="done">Done</div>
                    </div>
                </div>
            </div>

        </div>
        {{-- price --}}
        <div class="dropdown">
            <div class="bedroom-option options-selected">
                <div class="flex">
                    <img src="/images/price.svg">
                    <div class="text_before"> Pricing Range</div>  
                </div>
                <img src="/images/arrow.svg">
            </div>
            <div class="abs abs-price">
                <div class="flex col">
                    <div class="title">Price (AED)</div>
                    <div class="group-options">
                        <div class="option">
                            <div>Min</div>
                            
                            <input type="text" name="min_price" placeholder="min-price">
                        </div>
                        <div class="option">
                            <div>Max</div>
                            <input type="text"name="max_price" placeholder="min-price">
                        </div>

                    </div>
                    <div id="price-error" style="color: red; margin-top: 5px; display: none;"></div>


                    <div class="reset_done">
                        <div class="reset">Reset</div>
                        <div class="done">Done</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
