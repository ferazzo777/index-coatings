  <section class="page-hero">

    <div class="page-hero-background" style="background-image: url(<?php image_directory() ?>/content/home-hero-slide.jpg)"></div>

  </section>

  <section class="services-intro">

    <?php
    $service_list = get_field('service');
    $count = 0;

      while ( have_rows('service') ) : the_row();
        $count++;?>
        <div class="service <?php echo $count == 1 ? 'active' : '';?>">
          <a href="<?php echo get_sub_field('page_link');?>" class="service-link">
            <h3><?php echo get_sub_field('service_title');?></h3>
          </a>
          <div class="content">
            <?php echo get_sub_field('service_intro');?>
          </div>
          <div class="background-image" style="background-image: url(<?php echo get_sub_field('service_background_image')['url'];?>)"></div>
        </div>
      <?php
      endwhile;
    ?>

  </section>
