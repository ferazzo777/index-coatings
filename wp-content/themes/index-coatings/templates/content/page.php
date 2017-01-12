<?php if (!is_front_page()){ ?>
<section class="breadcrumbs">
  <?php
  echo breadcrumbs();
  ?>
</section>
<?php } ?>

<?php get_template_part('templates/modules/gallery-slider'); ?>

  <section class="wrapper page-content">

    <div class="container">

      <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

          <?php the_content(); ?>

        </article>

      <?php endwhile; ?>

    </div>

  </section>
