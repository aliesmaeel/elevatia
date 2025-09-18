@extends('layouts.master')

@section('title', 'Details Blog')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

<style>
    figure{
        margin: 0;
        width: 100%;
    }
   figure a img{
        width: 100%;
    }
   figcaption{
       display: none;
   }
   .col{
       color: white;
   }
</style>
{{-- main page --}}
@section('content')
<div class="contact_us container about_page details_blog_page only_blogs_details">

    {{-- banner --}}
    <div style="position:relative;height: 110vh;z-index: 1;" >
        <img src="{{asset('/storage/'.$blog->image)}}" class="banner">
        <div class="search-realestate">
            <div class="desc_title">
                <div class="main_title"></div>
                <div class="desc"></div>
            </div>
        </div>
    </div>
    <div class="details_blog">
        <div class="content">
            <div class="grid_container sections">
                <div class="col icons_Section"  data-aos="fade-up">
                    @foreach($blog->social_links as $link)
                    <a class="icon_social" href="//{{$link['url']}}">
                        <img style="filter: brightness(5)" src="{{asset('/storage/'.$link['icon'])}}">
                    </a>
                    @endforeach
                </div>
                <div class="col "  data-aos="fade-up">
            {!! $blog->description !!}
                </div>
                <div class="col third_section"  data-aos="fade-up">
                    <div class="art_director">
                        <div class="flex">
                            <img src="/images/person.png" class="director">
                            <div class="flex-col">
                                <div class="name">{{$blog->agent->name}}</div>
                                <div class="mini_desc">{{$blog->agent->position}}</div>
                            </div>
                        </div>
                        <div class="desc">
                            {{$blog->agent->quoute}}
                        </div>
                        <div class="position">
                            <div class="space_flex">
                                <div>
                                    <img src="/images/twitter_orange.svg">
                                    <span>@wadewarren</span>
                                </div>
                                <a href="#">
                                    <img src="/images/arrow_position.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="art_director">
                        <div class="grid_container">
                            <input type="hidden" id="blog-id" value="{{$blog->id}}">

                            <div class="col" style="display:flex;justify-content: center;">
                                <div class="img_container " id="like-btn" style="cursor: pointer">
                                    <img src="/images/likes_btn.svg">
                                </div>
                            </div>
                            <div class="col">
                                <div class="details_likes">
                                    <div class="text">Liked By</div>
                                    <div class="about_number">
                                        <div class="number_like" id="like-count">{{$blog->likes}}</div>
                                        <div class="text">|</div>
                                        <div class="text">Users</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="grid_container">
                            <div class="col" style="display:flex;justify-content: center">
                                <div class="img_container shared_btn" id="share-btn" style="cursor: pointer">
                                    <img src="/images/shared_btn.svg">
                                </div>
                            </div>
                            <div class="col" style="position: relative">
                                <div class="details_shared">
                                    <div class="text">Shared BY</div>
                                    <div class="about_number">
                                        <div class="number_shared" id="share-count">{{ $blog->shares }}</div>
                                        <div class="text">|</div>
                                        <div class="text"> Users</div>
                                    </div>
                                </div>
                                <div id="share-balloon"
                                     style="display: none; position:absolute; top:0px; left:0px; background:#4caf50; color:#fff; padding:0px 10px; border-radius:8px; font-size:14px; box-shadow:0 2px 6px rgba(0,0,0,0.2);">
                                    ✅ Link Copied!
                                </div>
                            </div>
                            <!-- balloon tooltip -->

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_empty"></div>
    <div class="content">
        <h1 class="col">you might be also interested in ...</h1>
    </div>
    <div class="similar_blogs mt_small" >
        <div class="content">
            <div class="grid-container" data-aos="fade-up">

                @foreach($relatedBlogs as $relatedBlog)
                <div class="col">
                  <x-blog_item :blog="$relatedBlog"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    @endsection

<script>

    document.addEventListener("DOMContentLoaded", function () {
        const likeBtn = document.getElementById("like-btn");
        const likeCount = document.getElementById("like-count");
        const blogId = document.getElementById("blog-id").value;
        const storageKey = "liked_blog_" + blogId;

        // Check if user already liked this blog
        if (localStorage.getItem(storageKey)) {
            likeBtn.disabled = true;
            likeBtn.innerText = "Liked";
        }

        likeBtn.addEventListener("click", function () {
            if (!localStorage.getItem(storageKey)) {
                // Send request to backend
                fetch("/blog/" + blogId + "/like", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({})
                })
                    .then(response => response.json())
                    .then(data => {
                        likeCount.innerText = data.likes;
                        localStorage.setItem(storageKey, "true"); // Save in localStorage
                        likeBtn.disabled = true;
                        likeBtn.innerText = "Liked";

                    });
            }
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        const shareBtn = document.getElementById("share-btn");
        const shareCount = document.getElementById("share-count");
        const balloon = document.getElementById("share-balloon");
        const blogId = document.getElementById("blog-id").value;
        const storageKey = "shared_blog_" + blogId;


        shareBtn.addEventListener("click", function () {

            // Copy current link
            navigator.clipboard.writeText(window.location.href).then(() => {
                balloon.style.display = "block";
                setTimeout(() => { balloon.style.display = "none"; }, 2000);
                fetch("/blog/" + blogId + "/share", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({})
                })
                    .then(res => res.json())
                    .then(data => {
                        shareCount.innerText = data.shares;
                    });
            });

        });
    });

</script>

{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection


