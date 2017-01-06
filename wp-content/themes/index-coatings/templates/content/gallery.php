  <?php $gallery = get_field( 'gallery', 'options' );
  $types = array();
  foreach ($gallery as $type):
    $type_array = $type['type'];
    foreach ($type_array as $type_pin){
      $types[$type_pin->ID] = array(
        'post_title' => $type_pin->post_title,
        'post_name' => $type_pin->post_name
      );
    }
  endforeach;
  ?>

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

        foreach ($types as $type) {
          echo '<a data-type="'.$type['post_name'].'" class="gallery-filter-option" value="'.$type['post_name'].'">'.$type['post_title'].'</a>';
        }

        ?>

      </div>

    </span>

  </section>




  <?php if ($gallery) { ?>

  <section class="gallery-wrapper">

    <div class="gallery">

      <?php foreach ($gallery as $image): ?>

      <?php
      $types = '';
      $url = $image['image'];
      $title = $image['title'];
      $type = $image['type'];
      $type_array = $image['type'];

      foreach ($type_array as $type_pin){
        $types .= $type_pin->post_name . ' ';
      }
      ?>

        <a class="gallery-item all <?php echo $types ?>" data-featherlight="<?php echo $url['url'] ?>">
          <img class="gallery-item-image" src="<?php echo $url['sizes']['medium'] ?>" alt="<?php echo $url['alt']; ?>" title="<?php echo $url['title'] ?>">
          <span class="gallery-item-title"><?php echo $image['title']; ?></span>
        </a>

      <?php endforeach; ?>

    </div>

  </section>

  <?php } ?>
