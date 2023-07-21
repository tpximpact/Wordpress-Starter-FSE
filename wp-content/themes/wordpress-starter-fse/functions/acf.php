<?php 


add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point($paths)
{
  unset($paths[0]);
  $paths[] = get_template_directory() . '/acf-json';
  return $paths;
}



// create options page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'  => 'Site options',
    'menu_title'  => 'Site options',
    'menu_slug'   => 'theme-options',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'icon_url'    => 'dashicons-admin-generic',
    'position'    => 22,
  ));
}


