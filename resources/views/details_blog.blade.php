@extends('layouts.master')

@section('title', 'Details Blog')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="contact_us container about_page details_blog_page">
        
    {{-- banner --}}
    <div style="position:relative;height: 110vh;z-index: 1;" >
        <img src="/images/banner_contact.png" class="banner">
        <div class="search-realestate">
            <div class="desc_title">
                {{-- <div class="main_title">Search Luxury Homes In Dubai</div>
                <div class="desc">   Explore Dubai’s Diverse Communities: Where Tradition Meets Innovation in Every Neighborhood.</div> --}}
            </div>
        </div>
    </div>
    <div class="details_blog">
        <div class="content" data-aos="fade-up">
            <div class="grid_container sections">
                <div class="col icons_Section">
                    <a class="icon_social" href="#">
                        <img src="/images/twitter_orange.svg">
                    </a>
                    <a class="icon_social" href="#">
                        <img src="/images/social_2.svg">
                    </a>
                    <a class="icon_social" href="#">
                        <img src="/images/facebook_orange.svg">
                    </a>
                </div>
                <div class="col ">
                    <div class="flex_col">
                        {{-- first title + desc --}}
                        <div class="title">
                            The Essence of Minimalism in Design
                        </div>
                        <div class="desc">
                            In the realm of design, the essence of minimalism lies in the deliberate choice to distill complexity and convey a powerful message through simplicity. It's an art form that celebrates the beauty of space, emphasizing the significance of each carefully chosen element. A minimalist design isn't about deprivation; rather, it's a conscious decision to focus on the core, allowing the audience to engage with a visual narrative that is both refined and impactful.
                            <br><br>
                            As we explore the essence of minimalistic design, we uncover the subtle nuances that contribute to its allure. The use of negative space, a hallmark of minimalism, creates breathing room within the composition, allowing the viewer's gaze to rest and appreciate the inherent beauty of the design. The simplicity in form and color becomes a canvas for expression, where every line and shade tells a story. By embracing minimalism, designers have the opportunity to communicate more with less, fostering a connection that transcends visual aesthetics.
                            <br><br>
                            At its core, minimalism in design challenges conventional notions, encouraging a shift from excess to essence. It invites both creators and consumers to engage in a thoughtful dialogue with the visual elements, promoting a sense of mindfulness and intentionality. The essence of minimalistic design, therefore, lies not just in its visual appeal but in the profound impact it has on the way we perceive and interact with the world of design.
                        </div>
                    </div>
                    <div class="flex_col">
                        {{-- second title + desc --}}
                        <div class="title">
                            Minimalism Beyond Aesthetics
                        </div>
                        <div class="desc">
                            Beyond its visually captivating exterior, minimalism is a design philosophy that permeates every aspect of the creative process, extending its influence far beyond the surface. This philosophy becomes a lens through which designers view their craft, shaping not just what is seen but how it is experienced. The minimalist approach transcends mere aesthetics; it becomes a mindset that emphasizes clarity, functionality, and a deeper connection with the audience.
                            <br><br>
                            Minimalism, as a philosophy, challenges the notion that complexity is synonymous with sophistication. It prompts designers to question the necessity of each element, encouraging a meticulous evaluation of form and function. This shift in perspective extends to the user experience, where the removal of unnecessary clutter allows for a seamless and intuitive interaction. Beyond creating visually pleasing designs, the minimalist philosophy becomes a guiding force for designing experiences that are inherently user-centric.

                        </div>
                        <div class="img_container">
                            <img src="/images/blog_details.png">
                        </div>
                    </div>
                    <div class="flex_col">
                        {{-- second title + desc --}}
                        <div class="title">
                            Practical Tips for Mastering Minimalistic Design
                        </div>
                        <div class="desc">
                            The journey to mastering minimalistic design involves a practical exploration of principles and techniques that breathe life into the philosophy. It begins with an understanding of the psychology of color in minimalism, where the strategic use of a limited color palette contributes to the overall impact of the design. The intentional choice of typography plays a pivotal role, guiding the viewer through the visual narrative with clarity and purpose.
                            <br><br>
                            Navigating the terrain of minimalistic design also involves a keen awareness of the power of negative space. Far from being empty, this space becomes a deliberate pause, allowing the audience to absorb and appreciate the essential elements of the composition. Striking the right balance between simplicity and sophistication is an art in itself, requiring a discerning eye and a commitment to the core principles of minimalism.
                            <br><br>
                            Practical tips extend beyond the theoretical, delving into the day-to-day decisions that shape a minimalist design. From the selection of imagery to the judicious use of graphic elements, each choice contributes to the overall impact. Mastery in minimalistic design is not merely about adherence to a set of rules; it's about developing an intuition that guides the creative process, ensuring that every design decision serves a purpose and contributes to the cohesive whole.
                        </div>
                    </div>  
                </div>
                <div class="col third_section">
                    <div class="art_director">
                        <div class="flex">
                            <img src="/images/person.png" class="director">
                            <div class="flex-col">
                                <div class="name">Wade Warren</div>
                                <div class="mini_desc">Art Director</div>
                            </div>
                        </div>
                        <div class="desc">
                            Crafting visual narratives that captivate and inspire, weaving creativity into every chapter of the design journey.
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
                            <div class="col">
                                <div class="img_container like_btn">
                                    <img src="/images/likes_btn.svg">
                                </div>
                            </div>
                            <div class="col">
                                <div class="details_likes">
                                    <div class="text">Liked By</div>
                                    <div class="about_number">
                                        <div class="number_like">2.6k</div>
                                        <div class="text">|</div>
                                        <div class="text">Users</div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="grid_container">
                            <div class="col">
                                <div class="img_container shared_btn">
                                    <img src="/images/shared_btn.svg">
                                </div>
                            </div>
                            <div class="col">
                                <div class="details_shared">
                                    <div class="text">Shared BY</div>
                                    <div class="about_number">
                                        <div class="number_shared">2.6k</div>
                                        <div class="text">|</div>
                                        <div class="text"> Users</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_empty"></div>
    <div class="similar_blogs">
        <div class="content">
            <div class="grid-container" data-aos="fade-up">
                @include('components.blog_item')
            </div>
        </div>
    </div>
</div>
    @endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection