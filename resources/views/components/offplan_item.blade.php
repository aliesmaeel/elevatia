<div class="col" data-aos="fade-up">
    <div class="img_Container">
        <img src="{{asset('/storage/'.$property->image)}}">
    </div>
    <div class="flex-col">
        <a class="name_offplan" href="/offplan/{{$property->slug}}">{{$property->title}}</a>
        <div class="flex">
            <img src="/images/location.svg">
            <div class="location">{{$property->address}}</div>
        </div>
        <div class="flex">
            <img src="/images/setting.svg">
            <div class="location">{{$property->developer}}</div>
        </div>
        <div class="flex center">
            From AED {{$property->price_starts_from}}
        </div>
        <div class="line"></div>
        <div class="desc"> Handover  in {{$property->handover_date}}</div>
    </div>
</div>

