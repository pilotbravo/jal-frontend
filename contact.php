<?php include ('header.php'); ?>

    <div class="content-wrapper oh">

      <!-- Page Title -->
      <section class="page-title text-center">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Contact</h1>
            <p class="page-title__subtitle">Let’s have a discussion</p>
          </div>
        </div>
      </section> <!-- end page title -->

      <!-- Contact -->
      <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="contact box-shadow-large offset-top-171">
                <ul class="contact__items">
                  <li class="contact__item">
                    <address>2-4-11 Higashi-Shinagawa, Shinagawa-ku, Tokyo</address>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Phone: </span>
                    <a href="tel:1800 102 4135">1800 102 4135>+ 1 (800) 155 4561</a>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Email: </span>
                    <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a>
                  </li>
                </ul>    

                <!-- Contact Form -->
                <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                  <div class="row row-30">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                        <input name="name" id="name" type="text">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                        <input name="email" id="email" type="email">
                      </div>
                    </div>
                  </div>
                  
                  <div class="contact-message">
                    <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                    <textarea id="message" name="message" rows="7" required="required"></textarea>
                  </div>

                  <input type="submit" class="btn btn--lg btn--color btn--wide btn--button" value="Send Message" id="submit-message">
                  <div id="msg" class="message"></div>
                </form>
              </div>
            </div>            
          </div>
        </div>
      </section> <!-- end contact -->


      <!-- Google Map -->
      <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>



      <!-- Footer -->
      <?php include ('footer.php'); ?>