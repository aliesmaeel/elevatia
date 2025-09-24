<form class="form_search" method="GET" action="{{ route('property.search') }}">
    @csrf
{{-- search --}}
    @include('components.search_box')
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
                    <div class="title">Property Type</div>
                    <div class="group-options property-type">



                        @foreach(\App\Helpers\RealestateTypes::getPropertyTypes() as $key => $label)
                            <div class="option">
                                <div class="custom-radio" data-value="{{ $key }}">{{ $label }}</div>
                                <input type="radio" value="{{ $key }}" name="property_type" style="display: none;">
                            </div>
                        @endforeach

                        <input type="hidden" id="property_type" name="property_type">
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
                        @php
                            $bathrooms = ['any', 1, 2, 3, 4, 5];
                        @endphp

                        @foreach($bathrooms as $bathroom)
                            <div class="option {{ $loop->first ? 'active' : '' }}">
                                <div class="custom-radio" data-value="{{ $bathroom === 'any' ? 'any' : $bathroom . ' Bathroom' }}">
                                    {{ $bathroom === 'any' ? 'Any' : $bathroom . ' Bathroom' }}
                                </div>
                                <input type="radio"
                                       value="{{ $bathroom === 'any' ? 'any' : $bathroom }}"
                                       name="bathrooms"
                                       style="display: none;">
                            </div>
                        @endforeach

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
                    <div class="group-options bedroom-group">
                        @php
                            $bedrooms = ['any',0, 1, 2, 3, 4, 5];
                        @endphp

                        @foreach($bedrooms as $bedroom)
                            <div class="option {{ $loop->iteration ? 'active' : '' }}">
                                <div class="custom-radio"
                                     data-value="{{ $bedroom === 'any' ? 'any' : ($bedroom == 0 ? 'Studio' : $bedroom . ' Bedroom') }}">
                                    {{ $bedroom === 'any' ? 'Any' : ($bedroom == 0 ? 'Studio' : $bedroom . ' Bedroom') }}
                                </div>

                                <input type="radio"
                                       value="{{ $bedroom === 'any' ? 'any' : $bedroom }}"
                                       name="bedrooms"
                                       style="display: none;">
                            </div>
                        @endforeach

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
