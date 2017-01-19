<?php
function show_sub_pages() {
  global $post;
  echo '<ul class="sub-page-list">';
  wp_list_pages( array('child_of' => $post->ID, 'title_li' => '', 'depth' => '1' ));
  echo '</ul>';
}
add_shortcode('sub_pages', 'show_sub_pages');
?>
