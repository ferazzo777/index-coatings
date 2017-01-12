<?php
// --------------------------------------------------------------------------
//
//   Compare URL against relative URL
//
// --------------------------------------------------------------------------

function url_compare($url, $rel) {
  $url = trailingslashit($url);
  $rel = trailingslashit($rel);
  return ((strcasecmp($url, $rel) === 0) || root_relative_url($url) == $rel);
}


// --------------------------------------------------------------------------
//
//   Root Relative URLs
//
// --------------------------------------------------------------------------

function root_relative_url($input) {
  if (is_feed()) {
    return $input;
  }
  $url = parse_url($input);
  if (!isset($url['host']) || !isset($url['path'])) {
    return $input;
  }
  $site_url = parse_url(network_home_url());  // falls back to home_url
  if (!isset($url['scheme'])) {
    $url['scheme'] = $site_url['scheme'];
  }
  $hosts_match = $site_url['host'] === $url['host'];
  $schemes_match = $site_url['scheme'] === $url['scheme'];
  $ports_exist = isset($site_url['port']) && isset($url['port']);
  $ports_match = ($ports_exist) ? $site_url['port'] === $url['port'] : true;
  if ($hosts_match && $schemes_match && $ports_match) {
    return wp_make_link_relative($input);
  }
  return $input;
}

// Brteadcrumbs
function breadcrumbs(){
 $url = $_SERVER["REQUEST_URI"];
 $urlArray = array_slice(explode("/",$url), 0, -1);
 $num_allowed = 4;
 $site_url = get_bloginfo('url');

 // Set $dir to the first value
 $dir = array_shift($urlArray);
 echo '<a href="'.$site_url.'" class="m-hide">Home</a>';
 foreach($urlArray as $key => $text) {
   $dir .= "/$text";
    if($key < $num_allowed) {
      //Exclude the two taxonomies
       if ($text != 'space' && $text != 'type') {

         //echo '<span>/</span>'.$text;
         echo ' <span>/</span> <a href="'.$dir.'">' . str_replace("-", " ", ucwords(str_replace('_', ' ', $text))) . '</a>';
       }

    } else {
        break;
    }
 }
}
