<?php

/**

 * The theme header.

 * 

 * @package bootstrap-basic4

 */


$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
    $container_class = 'container';
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/Navbar-Centered.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/Social-Icon-Circle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--wordpress head-->
    <!--end wordpress head-->
</head>
<body <?php body_class(); ?>>
    <!-- <div class="<?php echo $container_class; ?> page-container"> -->
    <body>
        <section class="menu navBg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-3 mb-3">
                    <h1 class="headingH1">Tao Consulting services</h1>
                    <h1>Hello World</h1>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                        <div class="container"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav">
                                <?php 
                                wp_nav_menu(
                                    array(
                                        'depth' => '2',
                                        'theme_location' => 'primary', 
                                        'container' => false, 
                                        'menu_id' => 'bb4-primary-menu',
                                        'menu_class' => 'nav navbar-nav text-uppercase', 
                                        'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                    )
                                ); 
                                ?> 
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>





        <!-- <div id="content" class="site-content row row-with-vspace"> -->