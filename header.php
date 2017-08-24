<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
    <header id="head" class="head">
        <nav>
            <div class="container">
                <div class="col-md-6">
                    <a class="brand" href="<?php bloginfo('siteurl'); ?>/" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <a href="tel:0428446620">
                        Tel: 0428 446 620
                    </a>
                    <p>
                        <a href="https://www.facebook.com/gardenandoutdoorspaces/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
                        <a href="https://www.instagram.com/garden_and_outdoor_spaces/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png"></a>
                    </p>
                </div>
            </div>
        </nav>
    </header>
    <!-- #head -->
