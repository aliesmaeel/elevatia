<form id="contactForm_view">
    <div class="grid_container">
        <div class="col">
            <div class="desc_text">Full Name</div>
            <div class="input_div">
                <input type="text" placeholder="Enter First Name"/>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col">
            <div class="desc_text">Your Phone</div>
            <div class="input_div">
                <img src="/images/ph_white.svg">
                <input type="text" id="phoneInput" placeholder="Enter Your Number"/>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col">
            <div class="desc_text">Your Email</div>
            <div class="input_div">
                <img src="/images/email_white.svg">
                <input type="text" placeholder="Enter Your Email"/>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group time_group">
            <div class="desc_text">Preferred Time</div>
            <div class="input_div">
                <select id="time" name="time">
                    <option value="">Select Time</option>
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                  </select>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group date_group">
            <div class="desc_text">Preferred Date</div>
            <div class="input_div">
                <select id="date" name="date">
                    <option value="">Select Date</option>
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                  </select>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col select_group type_group">
            <div class="desc_text">Property Type</div>
            <div class="input_div">
                <select id="type" name="type">
                    <option value="">Select Type</option>
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                  </select>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <div class="col col_3">
            <div class="desc_text">Message</div>
            <div class="input_div">
                <textarea placeholder="Enter your Message here.." cols="3" rows="5"></textarea>
            </div>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        
    </div>
    <div class="flex_container">
        <div class="checkbox_div">
            <label>
                <input type="checkbox" id="agreeCheckbox"> I agree to the terms and conditions
            </label>
            <div class="error-message" style="color:red; font-size:13px; display:none;">This field is required</div>
        </div>
        <button class="submit_view" type="submit">Send Your Message</button>
    </div>
    <img src="/images/bt.png" class="abs_img">
</form>