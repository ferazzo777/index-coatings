
  <?php if (have_rows('feature_list')) { ?>

  <section class="wrapper feature-list">

    <?php while (have_rows('feature_list')) { the_row(); ?>

    <span class="feature-list-item feature-list-item--<?php the_sub_field( 'colour' ); ?>">
      <?php the_sub_field( 'feature' ); ?>
    </span>

    <?php } ?>

  </section>

  <?php } ?>
