<?php get_header(); ?>

<main class="home-main">
    <div class="wrapper">
        <?php include get_template_directory() . ("/templates/home-latest-post.php"); ?>
    </div>
</main>

<?php
include get_template_directory() . ("/templates/home-categories.php");
get_footer();
?>