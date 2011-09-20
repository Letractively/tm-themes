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
    
    /**
     * 
     */
    // add_custom_image_header('', 'admin_header_style');
    
    add_action('admin_menu', 'layout_theme_page');
    
    function layout_theme_page() {
        add_theme_page(
            'Layout Setting',
            "Layout Setting",
            "edit_theme_options",
            basename(__FILE__),
            "layout_setting_page"
        );
        
        add_action( 'admin_init', 'tm_html5_register_setting' );
    }

    require( dirname(__FILE__).'/theme-options.php' );

}

?>

<?php







?>





















