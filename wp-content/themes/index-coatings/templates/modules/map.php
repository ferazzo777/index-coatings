<style type="text/css">

.acf-map {
	width: 100%;
	height: 520px;
	border: none;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2f3JIvtD19lB7Uo6xRlyBZoPkERCvxlU"></script>
<?php
function load_google_script(){
    wp_register_script( 'google', home_url() . '/assets/js/vendor/google.js', array( 'jquery' ) , '', true);
    wp_enqueue_script( 'google' );
}
add_action('wp_enqueue_scripts', 'load_google_script');

$location = get_field('google_map');

if( !empty($location) ):


?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>
