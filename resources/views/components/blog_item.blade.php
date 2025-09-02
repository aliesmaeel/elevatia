@foreach($blogs as $blog)
    <div class="col" data-aos="fade-up">
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
    @if($loop->iteration == 4)

        <div class="blog_2_box col" data-aos="fade-up">
            <div class="title_box">Experience Effortless Property Management</div>
            <div class="desc_box">
                Ready to experience hassle-free property management? Explore our Property Management Service categories and let us
                handle the complexities while you enjoy the benefits of property ownership.
            </div>

                <a href="/blogs">
                    <div>See All</div>
                </a>

            <img src="/images/bt.png" class="abs_img">

        </div>
    @endif

@endforeach


