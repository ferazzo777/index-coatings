
  <footer class="wrapper footer">

    <div class="container">

      <a class="footer-logo" href="<?php echo home_url(); ?>/"><img src="<?php image_directory() ?>/logo-white.svg" alt=""><span class="hide"><?php bloginfo('name'); ?></span></a>

      <span class="footer-caption">Proudly <strong>WA owned and operated</strong></span>

      <div class="footer-contact">

        <div class="footer-contact-column">

          <span class="footer-contact-detail footer-contact-detail--phone"><?php the_field( 'phone_number', 'options' ); ?></span>
          <span class="footer-contact-detail footer-contact-detail--email"><?php the_field( 'email_address', 'options' ); ?></span>
          <span class="footer-contact-detail footer-contact-detail--address"><?php the_field( 'address', 'options' ); ?></span>

          <div class="footer-contact-social">
            <a href="<?php the_field( 'facebook', 'options' ); ?>" class="footer-contact-social-link icon icon-facebook"></a>
            <a href="<?php the_field( 'twitter', 'options' ); ?>" class="footer-contact-social-link icon icon-twitter"></a>
            <a href="<?php the_field( 'googleplus', 'options' ); ?>" class="footer-contact-social-link icon icon-googleplus"></a>
            <a href="<?php the_field( 'linkedin', 'options' ); ?>" class="footer-contact-social-link icon icon-linkedin"></a>
          </div>

        </div>

        <div class="footer-contact-column">

          <?php

          $form_object = get_field('footer_form', 'options');
          gravity_form_enqueue_scripts($form_object['id'], true);
          gravity_form($form_object['id'], false, false, false, '', false, 1);

          ?>

        </div>

      </div>

      <div class="footer-copyright">&copy; <?php echo date('Y'); ?> All Rights Reserved <?php bloginfo('name'); ?> Pty Ltd | <a target="_blank" href="https://www.birdbrain.com.au/">Website by BirdBrain</a></div>

    </div>

  </footer>
