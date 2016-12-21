
  <section class="gallery-filter">

    All Examples

    <span href="#" class="gallery-filter-dropdown">

      <a class="gallery-filter-trigger">Filter by <i class="icon icon-filter"></i></a>

      <div class="gallery-filter-options">

        <a data-type="all" class="gallery-filter-option active" value="all">All</a>

        <?php

        // --------------------------------------------------------------------------
        //   Get Types
        // --------------------------------------------------------------------------

        $types_field = get_field_object('field_5859e9f7131bc');
        $types = $types_field['choices'];
        $types = array_map('sanitize_title', $types);

        foreach ($types as $label => $type) {
          echo "<a data-type='$type' class='gallery-filter-option' value='$type'>$label</a>";
        }

        ?>

      </div>

    </span>

  </section>


  <?php if (have_rows('gallery')) { ?>

  <section class="gallery-wrapper">

    <div class="gallery">

      <?php while (have_rows('gallery')) { the_row(); ?>

        <?php $image = get_sub_field( 'image' ); ?>
        <?php $type = sanitize_title(get_sub_field( 'type' )) ?>

        <a class="gallery-item all <?php echo $type ?>" data-featherlight="<?php echo $image['url'] ?>">
          <img class="gallery-item-image" src="<?php echo $image['sizes']['medium'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
          <span class="gallery-item-title"><?php the_sub_field( 'title' ); ?></span>
        </a>

      <?php } ?>

    </div>

  </section>

  <?php } ?>
