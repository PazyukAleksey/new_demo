<section class="first-screen">
    <img src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E"  class="customLazy"  data-src="<?php echo get_post_meta( get_the_ID(), 'bg_image', true ); ?>" width="1920" height="1080" alt="Remoute Mode ">
  <div class="container first-screen__content">
    <div class="first-screen__text">
      <h1><?php echo get_post_meta( get_the_ID(), 'fs_title', true ); ?></h1>
      <ul>
        <?php foreach (get_post_meta( get_the_ID(), 'first_screen_repeater', true ) as $item) { ?>
            <li><?php echo $item; ?></li>
        <?php } ?>
      </ul>
    </div>
    <div class="first-screen__form-wrapp">
        <?php echo get_template_part('blocks/forms/FormAfterSubmit'); ?>
            <div class="first-screen__form remove-this-block-for-user mainForm">
                <h2>Take the first step to your new remote career!</h2>
                <form id="main_screen_form" class="first-screen__form-main main-form _valid-form" data-form="register">
                    <input type="hidden" data-type="hidden" name="lang">

                    <div class="form-elem-label label-fname">First Name</div>
                    <div class="form-input-wrap form-elem form-name form-first-name">
                        <input type="text" data-type="name" class="_valid-input" name="FirstName" placeholder="First Name">
                    </div>

                    <div class="form-elem-label label-lname">Last Name</div>
                    <div class="form-input-wrap form-elem form-name form-last-name">
                        <input type="text" data-type="name" class="_valid-input" name="LastName" placeholder="Last Name">
                    </div>

                    <div class="form-elem-label label-email">Email address</div>
                    <div class="form-elem form-email form-input-wrap"><input type="email" data-type="email" class="_valid-input" name="email" placeholder="Email"></div>

                    <div class="form-elem-label label-phone">Phone number</div>
                    <div class="form-elem form-full-tel fn-flag-dl-parent _validation-message-wrapp form-input-wrap form-input-wrap_phone-select">
                        <div class="phone-custom-select phone-custom-select_dropdown-hidden"></div>
                    </div>

                    <div class="form-elem form-btn">
                        <div class="default-btn-hover-wrapp form-input-wrap">
                            <button class="sendRegister" type="submit" value="получить">Enroll today!</button>
                        </div>
                    </div>
                    <div class="form-elem form-text">
                        <p>By signing up, you agree to our <a href="/terms-of-use/" >Terms of Use</a> and&nbsp;our <a href="/privacy-policy/" >Privacy Policy</a>.</p>
                    </div>

                    <input type="hidden"  name="LinkId" value="se-en-remotemodenet" >
                    <input type="hidden"  name="UtmCampaign" >
                    <input type="hidden"  name="UtmContent" >
                    <input type="hidden"  name="UtmTerm" >
                    <input type="hidden"  name="UtmMedium" >
                    <input type="hidden"  name="UtmSource" >

                    <div class="messageForm"></div>
                </form>
            </div>

      </div>
      <?php get_template_part('blocks/forms/banner'); ?>
  </div>
</section>