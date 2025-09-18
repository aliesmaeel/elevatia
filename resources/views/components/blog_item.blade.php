
    <div class="col">
        <div class="img_container">
            <img src="{{asset('storage/' . $blog->image)}}" alt="Blog Image">
        </div>
        <a class="breif" href="/blog/{{$blog->slug}}">
           {{ $blog->title }}
        </a>
        <div class="date_desc">
            <div class="date">
                <img src="/images/calendar.svg">
                @php
                    use Carbon\Carbon;
                       $carbon = new Carbon($blog->created_at);
                        $formatted = $carbon->toFormattedDateString();
                @endphp
                <div>{{$formatted}}</div>
            </div>
        </div>
        <div class="text">
            {!! Str::limit(strip_tags($blog->description), 100, '...') !!}

        </div>
    </div>



