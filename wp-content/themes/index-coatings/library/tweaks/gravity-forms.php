<?php
// --------------------------------------------------------------------------
//
//   Gravity Forms Tweaks
//
// --------------------------------------------------------------------------


// --------------------------------------------------------------------------
//   Gravity forms - enable hide label
// --------------------------------------------------------------------------

add_filter("gform_enable_field_label_visibility_settings", "__return_true");

// --------------------------------------------------------------------------
//   Gravity forms - go to anchor after form submit
// --------------------------------------------------------------------------

add_filter("gform_confirmation_anchor", create_function("","return true;"));


add_filter( 'gform_init_scripts_footer', '__return_true' );

// solution to move remaining JS from https://bjornjohansen.no/load-gravity-forms-js-in-footer
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open' );
function wrap_gform_cdata_open( $content = '' ) {
  $content = 'document.addEventListener( "DOMContentLoaded", function() { ';
  return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close' );
function wrap_gform_cdata_close( $content = '' ) {
  $content = ' }, false );';
  return $content;
}

add_filter( 'gform_pre_render', 'add_input_type_gravity_forms' );

function add_input_type_gravity_forms( $form ) {
  foreach ( $form['fields'] as $f => $field )
  $form['fields'][$f]['cssClass'] .= ' input-type-' . $field['type'];

  return $form;
}
