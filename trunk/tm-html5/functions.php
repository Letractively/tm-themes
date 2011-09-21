<?php

/**
 * 
 */
add_action( 'after_setup_theme', 'tm_html5_setup' );

function tm_html5_setup()
{
    /**
     * 
     */
    add_theme_support('automatic-feed-links');
    
    
    /**
     * 
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

<?php







?>





















