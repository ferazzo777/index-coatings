  <header class="header">

    <a class="header-logo" href="<?php echo home_url(); ?>/"><img src="<?php image_directory() ?>/logo-color.svg" alt=""><span class="hide"><?php bloginfo('name'); ?></span></a>


    <a href="/quote" class="header-cta button button--green">Get a <strong>quote</strong></a>

    <i class="icon icon-menu header-menu-toggle js-primary-navigation-toggle"></i>

  </header>

  <?php get_template_part('templates/layout/navigation') ?>
