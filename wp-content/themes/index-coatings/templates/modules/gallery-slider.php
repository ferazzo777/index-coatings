
  <?php $gallery = get_field( 'gallery_slider' ); ?>

  <?php if ($gallery) { ?>

  <section class="wrapper gallery-slider-wrapper">

    <header class="gallery-slider-header">

      <h3 class="gallery-slider-title">
        <?php echo (is_home()) ? 'Examples of <strong>Our Work</strong>' : 'Related <strong>Work</strong>' ?>
      </h3>

      <a href="/gallery" class="gallery-slider-link">View All</a>

    </header>

    <div class="gallery-slider">

      <?php foreach ($gallery as $image) { ?>

        <div class="gallery-slider-slide">
          <img class="gallery-slider-image" src="<?php echo $image['sizes']['medium'] ?>" alt="<?php echo $image['title'] ?>">
        </div>

      <?php } ?>

    </div>

  </section>

  <?php } ?>
