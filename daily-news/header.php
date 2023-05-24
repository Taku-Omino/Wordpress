<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="l-header">
        <h3 class="p-headerTitle">Responsive <br class="p-spBr" />Site</h3>
        <div class="p-headerPc">
            <img class="p-headerPcLogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" />
            <div class="p-headerPcList">
                <ul>
                    <li><a href="<?php echo home_url('/contact'); ?>">contact</a></li>
                    <li><a href="<?php echo home_url('/access'); ?>">access</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">about</a></li>
                    <li><a href="<?php echo home_url(); ?>">home</a></li>
                </ul>
            </div>
        </div>
        <div class="p-headerSp">
            <div class="p-headerSpMenu">
                <button class="p-hamburger">
                    <span class="p-hamburgerBar"></span>
                    <span class="p-hamburgerBar"></span>
                    <span class="p-hamburgerBar"></span>
                </button>
            </div>
        </div>
    </header>
