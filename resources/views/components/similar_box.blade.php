<div class="box_simi">
    <div class="cont">
        <div class="img_container">
            <img src="{{asset('/storage/'.$property->image)}}">
        </div>
        <div class="list">
            <div class="title">
                {{ $property->title }}
            </div>
            <div class="desc">
                {!! \Illuminate\Support\Str::words($property->description,10) !!}
            </div>
            <div class="flex_desc">
                <div class="single">
                    <img src="/images/icon_bed.svg">
                    <div>{{$property->bedrooms}}-Bedroom</div>
                </div>
                <div class="single">
                    <img src="/images/icon_bath.svg">
                    <div>{{$property->bathrooms}}-Bathroom</div>
                </div>
                <div class="single">
                    <img src="/images/villa.svg">
                    <div>{{$property->type}}</div>
                </div>
            </div>
            <div class="price_desc">
                <div>Price</div>
                <span>${{$property->price}}</span>
            </div>
        </div>
    </div>
</div>

