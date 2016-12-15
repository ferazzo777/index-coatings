
  <nav class="primary-navigation-wrapper">

    <i class="icon icon-cross primary-navigation-close js-primary-navigation-toggle"></i>

    <?php if (has_nav_menu('primary')) wp_nav_menu(array('theme_location' => 'primary')); ?>

    <div class="primary-navigation-contact">

      <a href="tel:<?php the_field( 'phone_number', 'options' ); ?>" class="primary-navigation-contact-link"><i class="icon icon-phone"></i><?php the_field( 'phone_number', 'options' ); ?></a>
      <a href="mailto:<?php the_field( 'email_address', 'options' ); ?>" class="primary-navigation-contact-link"><i class="icon icon-mail"></i><?php the_field( 'email_address', 'options' ); ?></a>

    </div>

    <div class="primary-navigation-social">
      <a href="<?php the_field( 'facebook', 'options' ); ?>" class="primary-navigation-social-link icon icon-facebook"></a>
      <a href="<?php the_field( 'twitter', 'options' ); ?>" class="primary-navigation-social-link icon icon-twitter"></a>
      <a href="<?php the_field( 'googleplus', 'options' ); ?>" class="primary-navigation-social-link icon icon-googleplus"></a>
      <a href="<?php the_field( 'linkedin', 'options' ); ?>" class="primary-navigation-social-link icon icon-linkedin"></a>
    </div>

  </nav>
