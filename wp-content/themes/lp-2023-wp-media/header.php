<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<header class="header">
    <div class="container main-navbar">
        <div class="logo">
            <a href="<?php echo site_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
            </a>
        </div>
        <?php 
        $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu'
        );
        wp_nav_menu($args);
        ?>

        
    </div>
</header>
<body>