<?php

/*
Plugin Name: hello_world
Description: asdsad
Version: 1.0
*/

function hello_world() {
    echo "hello_world";
}


// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_world' );

?>
