<?php include get_template_directory() . ('/templates/contact-section.php'); ?>

<footer class="footer">
    <div class="wrapper">
        <div class="credits">
            ©2023 Krystian Kurlej
        </div>
        <div class="footer-menu">
            <?php
                wp_nav_menu(
                    array(
                        'footer' => 'footer',
                        'container' => '',
                        'theme_location' => 'footer',
                        'items_wrap' => '<ul id="" class="footer-menu content-list">%3$s</ul>'
                    )
                );
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>