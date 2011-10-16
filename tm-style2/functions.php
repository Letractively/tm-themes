<?php

/**
 * 
 */
add_action( 'after_setup_theme', 'setup_theme' );

function setup_theme()
{
    /**
     *  rss setting
     */
    add_theme_support('automatic-feed-links');
    
    
    /**
     *  sidebar setting
     */
    register_sidebar(array(
        'name' => 'SideBar',
        'description' => 'SideBar 1',
        'before_title' => '<h1>',
        'after_title' => '</h1><div class="contents">',
        'before_widget' => '<section class="side-box">',
        'after_widget' => '<div></section>'
    ));
}

?>

