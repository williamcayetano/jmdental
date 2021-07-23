<?php $this->load->view('includes/header_default_view'); ?>

    <div class="container-flex">
        <div class="billboard">
          <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chevron-left chevron-left-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
        <h3>John Martin Dental & Associates</h3>
        <h2>CONTACT</h2>
      </div>
    </div>

    <div class="container-flex appointment-container contact-form">
      <h2 class="default-header smile-header form-header">
        Contact John Martin Dental
      </h2>
      <p class="contact-form-paragraph">
        Whether you need a dental cleaning, have a cavity, or suspect that you might have gum disease, Dr. Martin is ready to help. To schedule a consultation with Dr. John Martin, feel free to provide your information below, and an associate will respond to your request as soon as possible (typically between 24 to 48 business hours).
      </p>
      <form>
        <div class="">
          <select id="office" name="office">
            <option value="0">Choose Your Office*</option>
            <option value="maryland-heights">Maryland Heights</option>
            <option value="gerald">Gerald</option>
          </select>
        </div>
        <div class="">
          <input type="text" placeholder="Your Name*" />
        </div>
        <div class="">
          <input type="text" placeholder="Your Email*" />
        </div>
        <div class="">
          <input type="text" placeholder="Your Phone*" />
        </div>
        <div class="">
          <textarea placeholder="How can we help you? *"></textarea>
        </div>
        <div class=""><input type="submit" text="SUBMIT REQUEST" /></div>
      </form>
    </div>
   
    <div class="container-flex location-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 google-maps">
            <h2 class="location-header">Maryland Heights</h2>
            <div class="row location-time-container">
              <div class="col-xs-2 location-text">
                MON<span class="location-time">11:00–7:00</span>
              </div>
              <div class="col-xs-2 location-text">
                TUE<span class="location-time">8:30–5:00</span>
              </div>
              <div class="col-xs-2 location-text">
                WED<span class="location-time">8:30–7:00</span>
              </div>
              <div class="col-xs-2 location-text">
                THUR<span class="location-time">7:30–2:00</span>
              </div>
              <div class="col-xs-2 location-text">
                FRI<span class="location-time">7:30–3:00</span>
              </div>
            </div>
            <div class="">
              <iframe
                width="400"
                height="300"
                frameborder="0"
                style="border: 0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCWrRu7bSZd_4OfFyQyj5onHitXBGFWY0U
                  &q=11705+Dorsett+Road+Suite+205+Maryland+Heights,+MO+63043"
                allowfullscreen
              >
              </iframe>
            </div>
          </div>
          <div class="col-lg-6 google-maps">
            <h2 class="location-header">Gerald</h2>
            <div class="row location-time-container">
              <div class="col-xs-2 location-text">
                MON<span class="location-time">11:00–7:00</span>
              </div>
              <div class="col-xs-2 location-text">
                TUE<span class="location-time">8:30–5:00</span>
              </div>
              <div class="col-xs-2 location-text">
                WED<span class="location-time">8:30–7:00</span>
              </div>
              <div class="col-xs-2 location-text">
                THUR<span class="location-time">9:00–4:00</span>
              </div>
              <div class="col-xs-2 location-text">
                FRI<span class="location-time">8:00–3:00</span>
              </div>
            </div>
            <div class="">
              <iframe
                width="400"
                height="300"
                frameborder="0"
                style="border: 0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCWrRu7bSZd_4OfFyQyj5onHitXBGFWY0U
                  &q=741+W.+Springfield+Rd.+Gerald,+MO+63037"
                allowfullscreen
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-flex footer-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="footer-header">
              <span style="font-size: 2em; color: white; display: inline-block">
                <i class="fas fa-tooth"></i>
              </span>
              <strong>Dr. John Martin</strong><br />& Associates
            </h3>
          </div>
          <div class="col-lg-4">
            <h3>CALL US</h3>
            <p>
              Maryland Heights Office<br /><span style="font-weight: 700"
                >(314) 739-1222</span
              >
            </p>
            <p>
              Gerald Office<br /><span style="font-weight: 700"
                >(573) 764-2425</span
              >
            </p>
          </div>
          <div class="col-lg-4">
            <h3>FOLLOW US</h3>
            <a href="https://www.facebook.com/DrJohnMartinDDS/"></a>
            <span style="font-size: 4em; color: #0098d5; display: inline-block">
              <i class="fab fa-facebook-square"></i>
            </span>
            </a>
          </div>
        </div>
        <div class="">St. Louis Dentist | 5.0 stars, based on 4 reviews</div>
      </div>
    </div>

    <div class="container-flex credit-container">
      <p>
        © 2020 John Martin Dental. All Rights Reserved.<br />Developed By <a href="https://williamcayetano.com" target="_blank"><strong>William Cayetano</strong></a>
      </p>
    </div>

