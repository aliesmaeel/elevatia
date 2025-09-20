{{-- <div class="shadow">

</div> --}}
<div class="footer">
    <div class="content">
        <div class="grid-container">
            <div class="col">
                <div class="desc desc_min">
                    ELEVATIA Properties is committed to delivering a high level of expertise,  customer service, and attention to detail to the marketing and sales of  luxury real estate and rental properties
                    {{-- <a href="#">
                        Read More

                    </a> --}}
                </div>
                <div>
                    <form class="contact_email_form" method="POST" action="{{ route('form.submit') }}">
                        @csrf
                        <div class="contact_email">
                            <div class="flex">
                                <img src="/images/Vector.svg" class="left_s"/>
                                <input type="email" name="email" placeholder="Enter Your Email" required>
                                <input type="hidden" name="type" value="subscription">
                            </div>

                            <button type="submit">
                                <img src="/images/send.svg">
                            </button>
                        </div>
                        <span class="email_error" style="color:#CEA669; display: none; font-size: 14px;">Please enter a valid email.</span>
                    </form>
                </div>
            </div>
            <div class="col flex-center">
                <div class="title">Useful Links</div>
                <div class="flex-col">
                    <a href="{{ route('home') }}">
                        <div class="row">
                            <div class="over-text-hide">Home Page</div>
                        </div>
                    </a>
                    <a href="{{ route('blogs.index') }}">
                        <div class="row">
                            <div class="over-text-hide">Our Blogs</div>
                        </div>
                    </a>
{{--                    <a href="{{ route('agents.index') }}">--}}
{{--                        <div class="row">--}}
{{--                            <div class="over-text-hide">Our Team</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <a href="{{ route('offplan.index') }}">
                        <div class="row">
                            <div class="over-text-hide">OffPlan Project</div>
                        </div>
                    </a>
                    <a href="{{ route('about.index') }}">
                        <div class="row">
                            <div class="over-text-hide">About Us </div>
                        </div>
                    </a>
                    <a href="{{ route('contact.index') }}">
                        <div class="row">
                            <div class="over-text-hide">Contact Us </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="title">Contact Us</div>
                <div class="flex-col">
                    <a href="#">
                        <div class="row">
                            <img src="/images/location.svg">
                            <div class="over-text-hide">Clover Bay, Business Bay, office no.2206</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="row">
                            <img src="/images/tel.svg">
                            <div class="over-text-hide">+971 52 324 6090</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="row">
                            <img src="/images/mail.svg">
                            <div class="over-text-hide">Info@elevatiaproperties.com</div>
                        </div>
                    </a>
                    <div class="same_row">
                        <a target="_blank" href="https://www.facebook.com/share/17JAVEeZ3N/">
                            <img src="/images/facebook.svg">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/company/elevatia-properties/">
                            <img src="/images/linkedin.svg">
                        </a>
                        <a target="_blank" href="https://www.instagram.com/elevatiaproperties?igsh=MXgweTRmOTU4MGRleg==">
                            <img style="background-color: white;border-radius: 50%;border: none"
                                 src="/images/instagram2.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="terms flex">
            <div>@2023 Elvataia . All Rights Reserved.</div>
            <div class="flex-start">
                <a href="/privacy-policy" target="_blank" class="flex-start">
                    <div >Privacy Policy</div>
                </a>
            </div>
        </div>
    </div>
</div>
