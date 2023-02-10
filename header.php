<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="top-nav">
        <div class="wrapper">
            <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
            ?>
            <div class="nav-menu-container">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'menu',
                            'container' => '',
                            'theme_location' => 'menu',
                            'items_wrap' => '<ul id="" class="nav-menu">%3$s</ul>'
                        )
                    );
                ?>
            </div>
            <button class="mobile-btn">
                <div class="hamburger-icon"></div>
            </button>
        </div>
    </nav>
    <div class="nav-spacer"></div>

    <?php include get_template_directory() . ("/templates/breadcrumbs.php"); ?>