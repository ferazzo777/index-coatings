
  <?php
  $gallery = get_field( 'gallery', 'options' );
  $filter_by = $post->post_name;
  $type_show = array();

  foreach ($gallery as $image) {
    $type_array = $image['type'];
    foreach ($type_array as $type){
      $type_show[] = $type->post_name;
    }
  }
  ?>

  <?php if (in_array($filter_by,$type_show) || $filter_by == 'home' && $gallery) {
    //echo $post->post_name;?>

  <section class="wrapper gallery-slider-wrapper">

    <header class="gallery-slider-header">

      <h3 class="gallery-slider-title">
        <?php echo (is_home()) ? 'Examples of <strong>Our Work</strong>' : 'Related <strong>Work</strong>' ?>
      </h3>

      <a href="/gallery" class="gallery-slider-link">View All</a>

    </header>

    <div class="gallery-slider">

      <?php
      foreach ($gallery as $image) {
        $image_file_medium = $image['image']['sizes']['medium'];
        $image_file_large = $image['image']['sizes']['large'];
        $type_array = $image['type'];
        $type_show = array();
        foreach ($type_array as $type){
          $type_show[] = $type->post_name;
        }
        //pre($type_show);
        if (in_array($filter_by,$type_show) || $filter_by == 'home'){
      ?>

        <div class="gallery-slider-slide" style="background-image:url(<?php echo $image_file_medium; ?>)" data-featherlight="<?php echo $image_file_large ?>">
          <!--<img class="gallery-slider-image" src="<?php echo $image_file_medium; ?>">-->
        </div>

      <?php
        }
        } ?>

    </div>

  </section>

  <?php } ?>
