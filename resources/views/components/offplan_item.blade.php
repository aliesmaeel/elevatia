<div class="col" data-aos="fade-up">
    <div class="img_Container">
        <a href="/offplan/{{$property->slug}}">
        <img src="{{asset('/storage/'.$property->images()->first()->image_path)}}">
        </a>
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
        <div class="desc"> Handover  in
            {{ 'Q' . \Carbon\Carbon::parse($property->completion_date)->quarter . ' ' . \Carbon\Carbon::parse($property->completion_date)->year }}
        </div>
    </div>
</div>

