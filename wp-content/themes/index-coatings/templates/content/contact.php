
  <section class="page-content">

    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <?php the_content(); ?>

      </article>

    <?php endwhile; ?>

  </section>
