<!-- Header -->
<div class="header">
    <div class="content">
        <img src="/images/menu.svg" class="icon">
    </div>
    <div class="right-list hidden">
        <div class="flex-col">
            <ul class="col-list">
                <li class="link link_img">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="/images/logo.png" class="logo_img">
                    </a>
                </li>
                <li class="link"><a href="{{ route('home') }}">Home Page</a></li>
                <li class="link"><a href="{{ route('blogs.index') }}">Our Blogs</a></li>
                {{--                <li class="link"><a href="{{ route('agents.index') }}">Our Team</a></li>--}}
                <li class="link"><a href="{{ route('offplan.index') }}">Off Plan Project</a></li>
                <li class="link"><a href="{{ route('property.all') }}">All Properties</a></li>
                <li class="link"><a href="{{ route('about.index') }}">About Us</a></li>
                <li class="link"><a href="{{ route('contact.index') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+971562676761"
   target="_blank"
   style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <img src="/images/whatsapp.svg" alt="WhatsApp" class="w-8 h-8">
</a>
