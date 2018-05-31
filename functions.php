<?php
// Add Theme Stylesheet Manually
function _iweb_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', '_iweb_scripts');

// Add Navigation Locations
function iweb_custom_menu(){
  register_nav_menus(array(
    'top_header'     => __( 'Social Menu'),
    'primary_menu'   => __( 'Header Menu'),
    'secondary_menu' => __( 'Footer Menu')
  ));
}
add_action('init', 'iweb_custom_menu');
// Add CopyRight button in Customizer Appearance

function iweb_site_copyright($iweb_copy)
{
  $iweb_copy->add_section('iweb_copyright_section', array(
    'title' => "Copyright"
  ));
  // Display Section Option
  $iweb_copy->add_setting('iweb_copyright_display', array(
    'default' => "Yes"
  ));
  $iweb_copy->add_control(new WP_Customize_Control($iweb_copy, 'iweb_copyright_display', array(
    'label'    => "Display This Section?",
    'section'  => 'iweb_copyright_section',
    'settings' => 'iweb_copyright_display',
    'type'     => 'checkbox',
    'choices'  => array("No" => 'No', "Yes" => "Yes")
  )));
  // Display Copyright Text
  $iweb_copy->add_setting('iweb_copyright_default', array(
    'default' => "Copyright 2018 | Design By Vishal Tanwar"
  ));
  $iweb_copy->add_control(new WP_Customize_Control($iweb_copy, 'iweb_copyright_controller', array(
    'label'    => "Copyright Text",
    'section'  => 'iweb_copyright_section',
    'settings' => 'iweb_copyright_default'
  )));
// Display Image example
$iweb_copy->add_setting('iweb_copyright_image');

$iweb_copy->add_control(new WP_Customize_Cropped_Image_Control($iweb_copy, 'iweb_copyright_image', array(
  'label'    => "Select Copyright Image",
  'section'  => 'iweb_copyright_section',
  'settings' => 'iweb_copyright_image',
  'width'    => '250',
  'height'   => '250'
)));

}

add_action('customize_register', 'iweb_site_copyright');
