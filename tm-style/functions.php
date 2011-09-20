<?php

register_sidebar(array(
    'name' => 'SideBar',
    'description' => 'SideBar 1',
    'before_widget' => '<section>',
    'after_widget' => '</section>'
));

function hello() {
    return "<strong>Hello, world!</strong>";
}
add_shortcode('hello', 'hello');

?>
