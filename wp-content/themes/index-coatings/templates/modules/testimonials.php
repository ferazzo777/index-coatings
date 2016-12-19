
  <?php $testimonials = get_field( 'testimonials', 'options' ); ?>

  <?php if ($testimonials) { ?>

  <section class="wrapper testimonials-wrapper">

    <header class="testimonials-header">

      <h3 class="testimonials-title">
        Testimonials
      </h3>

    </header>

    <div class="testimonials">

      <?php foreach ($testimonials as $testimonial) { ?>

        <div class="testimonial">

          <div class="testimonial-content"><?php echo $testimonial['content'] ?></div>
          <span class="testimonial-author"><?php echo $testimonial['author'] ?></span>

        </div>

      <?php } ?>

    </div>

  </section>

  <?php } ?>
