<?php

if ( function_exists('register_sidebar') ) {
  register_sidebar(array('name' => 'Sidebar',
                         'description' => 'Sidebar for navigation',
                         'before_widget' => '<div class="widget">',
                         'after_widget' => '</div>',
                         'before_title' => '',
                         'after_title' => ''));                      
  }
?>
