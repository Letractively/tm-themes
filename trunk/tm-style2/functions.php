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
        'id' => 'widget00',
        'name' => 'SideBar',
        'description' => 'SideBar 1',
        'before_title' => '<h1>',
        'after_title' => '</h1><div class="contents">',
        'before_widget' => '<section class="side-box">',
        'after_widget' => '</div></section>'
    ));
    
    /**
     *  sidebar setting
     */
    register_sidebar(array(
        'id' => 'FooterSideBar00',
        'name' => 'FooterSideBar00',
        'description' => 'SideBar 1',
        'before_title' => '<h1>',
        'after_title' => '</h1><div class="contents">',
        'before_widget' => '<section class="side-box">',
        'after_widget' => '</div></section>'
    ));
    
    /**
     *  sidebar setting
     */
    register_sidebar(array(
        'id' => 'FooterSideBar01',
        'name' => 'FooterSideBar01',
        'description' => 'SideBar 1',
        'before_title' => '<h1>',
        'after_title' => '</h1><div class="contents">',
        'before_widget' => '<section class="side-box">',
        'after_widget' => '</div></section>'
    ));
    
    /**
     *  sidebar setting
     */
    register_sidebar(array(
        'id' => 'FooterSideBar02',
        'name' => 'FooterSideBar02',
        'description' => 'SideBar 1',
        'before_title' => '<h1>',
        'after_title' => '</h1><div class="contents">',
        'before_widget' => '<section class="side-box">',
        'after_widget' => '<div></section>'
    ));
    
}

?>

