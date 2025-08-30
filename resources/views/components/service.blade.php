@foreach ($premiumProperties as $property)
    <div class="col" data-type="{{ App\Helpers\RealestateTypes::getPropertyStatus()[$property->status] }}">
        <div class="img-container">
            <img src="{{asset('storage/'.$property->image)}}">
        </div>
        <div class="title_col">{{$property->title}}</div>
        <div class="desc expanded">
            {!! \Illuminate\Support\Str::words($property->description,10) !!}
        </div>
        <div class="flex_desc">

            @foreach($property->amenities as $amenity)
                <div class="single">
                    <img src="{{asset('storage/'.$amenity->image)}}">
                    <div>{{$amenity->name}}</div>
                </div>
            @endforeach

        </div>
        <div class="flex_price">
            <div class="price_col">
                <div class="small">Price</div>
                <div class="numb"> $ {{$property->price}}</div>
            </div>
            <a class="btn">View Property Details</a>
        </div>
        <hr>
        <div class="space_between">
            <div class="user">
                <img src="{{asset('storage/'.$property->agent->image)}}">
                <div class="col_user">
                    <div>Listed By</div>
                    <div>{{$property->agent->name}}</div>
                </div>
            </div>
            <div class="tel_desc">
                <a href="https://wa.me/{{$property->agent->phone}}">
                    <img src="/images/whatsapp.svg">
                </a>
                <a href="tel:{{$property->agent->phone}}">
                    <img src="/images/phone.svg">
                </a>
            </div>
        </div>
    </div>
@endforeach

