<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d4a838a739.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="smp-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-9">
                <div class="smp-logo">
                    <img src="#" class="smp-img-logo embed-responsive" alt="">
                </div>
            </div>
            <div class="col-3 menu-response">
                <span class="smp-line"></span>
                <span class="smp-line"></span>
                <span class="smp-line"></span>
            </div>
            <div class="menu-desk col-lg-8 col-md-8 col-sm-8 col-12">

                <?php wp_nav_menu( array(
                        'theme_location'    => 'menu-header',
                        'container_class'   => 'smp-nav',
                        'menu_class'        => 'smp-nav-items'
                ) ); ?>
            </div>
        </div>
    </div>
</header>

