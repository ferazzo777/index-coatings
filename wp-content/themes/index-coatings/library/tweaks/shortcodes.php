<?php
function show_sub_pages() {
  global $post;
  
  	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&depth=1' );

  if ( $childpages ) {
  	$string = '<ul class="sub-page-list">' . $childpages . '</ul>';
  }

  return $string;
}
add_shortcode('sub_pages', 'show_sub_pages');
?>
