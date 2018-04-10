<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo bloginfo(); ?></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/temp-parts/style.css"; ?>" />
    </head>

    <body>
        <nav class="header">
            <?php 
                wp_nav_menu( $args = array(
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>