
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
                <div></div>
            </div>
            <div class="date">
                <img src="/images/Outline.svg">
                <div>{{$blog->section ?? 'Technology'}}</div>
            </div>
        </div>
        <div class="text">
          {!!  Str::limit($blog->description, 100, '...') !!}
        </div>
    </div>



