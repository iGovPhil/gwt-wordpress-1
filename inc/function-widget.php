<?php
/**
 * Register widgetized area
 *
 * @package gwt_wp
 */
 
function gwt_wp_widgets_init() {
  /**
   * This theme uses wp_nav_menu() in one location.
   */


  // custom
  register_sidebar( array(
  'name'          => __( 'My Sidebar', 'gwt_wp' ),
  'id'            => 'my-sidebar',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title'  => '<h5 class="widget-title">',
  'after_title'   => '</h5>',
  ) );

  //------------------------------------------------------------ 
  register_nav_menus( array(
    'aux_nav' => __( 'Auxiliary Menu', 'gwt_wp' ),
    'topbar_left' => __( 'Left Menu Top bar', 'gwt_wp' ),
    'topbar_right' => __( 'Right Menu Top bar', 'gwt_wp' ),
  ) );
  
  register_sidebar( array(
	'name'          => __( 'Left Sidebar', 'gwt_wp' ),
	'id'            => 'left-sidebar',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Right Sidebar', 'gwt_wp' ),
    'id'            => 'right-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Banner Section 1', 'gwt_wp' ),
    'id'            => 'banner-section-1',
    'before_widget' => '<div id="%1$s" class="banner-content widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Banner Section 2', 'gwt_wp' ),
    'id'            => 'banner-section-2',
    'before_widget' => '<div id="%1$s" class="banner-content widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Ear Content 1', 'gwt_wp' ),
    'id'            => 'ear-content-1',
    'before_widget' => '<div id="%1$s" class="ear-content widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Ear Content 2', 'gwt_wp' ),
    'id'            => 'ear-content-2',
    'before_widget' => '<div id="%1$s" class="ear-content widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Top 1', 'gwt_wp' ),
    'id'            => 'panel-top-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Top 2', 'gwt_wp' ),
    'id'            => 'panel-top-2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Top 3', 'gwt_wp' ),
    'id'            => 'panel-top-3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Top 4', 'gwt_wp' ),
    'id'            => 'panel-top-4',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Bottom 1', 'gwt_wp' ),
    'id'            => 'panel-bottom-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Bottom 2', 'gwt_wp' ),
    'id'            => 'panel-bottom-2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Bottom 3', 'gwt_wp' ),
    'id'            => 'panel-bottom-3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Panel Bottom 4', 'gwt_wp' ),
    'id'            => 'panel-bottom-4',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 1', 'gwt_wp' ),
    'id'            => 'footer-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 2', 'gwt_wp' ),
    'id'            => 'footer-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 3', 'gwt_wp' ),
    'id'            => 'footer-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 4', 'gwt_wp' ),
    'id'            => 'footer-4',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'gwt_wp_widgets_init' );