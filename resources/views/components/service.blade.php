
<div class="col"
     data-type="{{ $property->completion_status == 'ready'
        ? $property->status
        : 'off_plan' }}">


<div class="img-container">
            <img src="{{asset('storage/'.$property->image)}}">
        </div>
        <div class="title_col">{{$property->title}}</div>
        <div class="desc expanded">
            {!! \Illuminate\Support\Str::words($property->description,10) !!}
        </div>


        <div class="title_col " style="display: flex;gap: 4px">
            <img src="/images/location.svg" class="">
            {{$property->community->name}}
        </div>


        <div class="flex_price">
            <div class="price_col">
                <div class="small">Price</div>
                <div class="numb"> AED {{$property->price}}</div>
            </div>
            <a class="btn" href="{{route('property.details',['slug'=>$property->slug])}}">View Property Details</a>
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


