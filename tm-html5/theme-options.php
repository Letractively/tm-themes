<?php



add_action( 'wp_head', 'tm_html5_print_style' );


function tm_html5_register_setting() {
    register_setting('tm_html5_options', 'body-width');
    register_setting('tm_html5_options', 'body-color');
}



function layout_setting_page(){
?>

<div class="wrap">
    <h2>sample</h2>
    <form method="post" action="options.php">
        <?php settings_fields('tm_html5_options'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Body Width</th>
                <td><input type="text" name="body-width" value="<?php echo get_option('body-width'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Body Color</th>
                <td>
                    <input type="text" name="body-color" value="<?php echo get_option('body-color'); ?>" />
                    <a href="#" class="pickcolor hide-if-no-js" id="link-color-example"></a>
                    <input type="button" class="pickcolor button hide-if-no-js" value="色を選択" id="pickcolor">
                    <div id="colorPickerDiv" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
                </td>
            </tr>
            
        </table>
        <?php submit_button(); ?>
    </form>
</div>
    
<?php
}



function tm_html5_print_style()
{
    $options = get_option( 'tm_html5_options');
?>

<style type="text/css">
    
    #main {
        width: <?php echo get_option( 'body-width' ); ?>;
        background-color: <?php echo get_option( 'body-color' ); ?>;
    }
    
</style>

<?php
}



?>