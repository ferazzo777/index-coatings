
  <?php $logos = get_field( 'partners_logos', 'options' ); ?>

  <?php if ($logos) { ?>

  <section class="wrapper partners">

    <div class="partners-container">

      <div class="partners-slider">

        <?php foreach ($logos as $logo) { ?>

          <div class="partners-slider-slide">
            <img class="partners-slider-logo" src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
          </div>

        <?php } ?>

      </div>

    </div>

  </section>

  <?php } ?>
