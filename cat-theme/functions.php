<?php 
  
add_action('widgets_init','cat_widgets_init');

  function cat_widgets_init() {
    register_sidebar(array(
      'name' => __( 'Sidebar Cat Blog' ),
      'id' => 'cat-sidebar1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'description' => __( 'Widgets in this area will be shown on the right-hand side. And... meow!' ),
      'before_title' => '<h3>',
      'after_title' => '</h3>'

    )); 
  }

  register_nav_menu('main', 'Main Navigation Menu');

?>