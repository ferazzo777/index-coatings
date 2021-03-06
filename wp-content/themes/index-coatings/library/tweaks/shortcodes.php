<?php
function has_children() {
    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );
    if( count( $children ) == 0 ) {
        return false;
    } else {
        return true;
    }
}

function show_sub_pages() {
  global $post;
  if ( is_page() && has_children() )  	
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&depth=1' );
  else
  	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1' );

  if ( $childpages ) {
  	$string = '<ul class="sub-page-list">' . $childpages . '</ul>';
    return $string;
  }


}
add_shortcode('sub_pages', 'show_sub_pages');
?>
