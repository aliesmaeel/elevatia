<form id="contactForm_view" method="post" action="{{route('form.submit')}}">
    @csrf
    <div class="grid_container">
        <div class="col">
            <div class="desc_text">Full Name</div>
            <input type="hidden" name="type" value="{{$type ?? 'contact'}}">
            <div class="input_div">
                <input type="text" name="name" placeholder="Enter First Name"/>
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col">
            <div class="desc_text">Your Phone</div>
            <div class="input_div">
                <img src="/images/ph_white.svg">
                <input type="text" name="phone" id="phoneInput" placeholder="Enter Your Number"/>
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col">
            <div class="desc_text">Your Email</div>
            <div class="input_div">
                <img src="/images/email_white.svg">
                <input type="text" name="email" placeholder="Enter Your Email"/>
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group time_group">
            <div class="desc_text">Preferred Time</div>
            <div class="input_div">
                <select id="time" name="time">
                    <option value="">Select Time</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                    <option value="16:00">04:00 PM</option>
                    <option value="17:00">05:00 PM</option>
                    <option value="18:00">06:00 PM</option>
                    <option value="19:00">07:00 PM</option>
                    <option value="20:00">08:00 PM</option>
                </select>

            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group date_group">
            <div class="desc_text">Preferred Date</div>
            <div class="input_div">
                <input type="date" id="date" name="date">
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group type_group">
            <div class="desc_text">Property Type</div>
            <div class="input_div">
               <select id="property_type" name="property_type">
                   <option value="">Select Property Type</option>
                    @foreach(\App\Helpers\RealestateTypes::getPropertyTypes() as $type)
                       <option value="{{$type}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col col_3">
            <div class="desc_text">Message</div>
            <div class="input_div">
                <textarea name="message" placeholder="Enter your Message here.." cols="3" rows="5"></textarea>
            </div>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>

    </div>
    <div class="flex_container">
        <div class="checkbox_div">
            <label>
                <input type="checkbox" id="agreeCheckbox"> I agree to the terms and conditions
            </label>
            <div class="error-message" style="color:#CEA669; font-size:13px; display:none;">This field is required</div>
        </div>
        <button class="submit_view" type="submit">Send Your Message</button>
    </div>
    <img src="/images/bt.png" class="abs_img">
</form>
