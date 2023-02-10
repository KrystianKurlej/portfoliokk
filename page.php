<?php get_header(); ?>

<header class="page-header">
    <div class="wrapper">
        <h1 class="title">
            <?php the_title(); ?>
        </h1>
    </div>
</header>

<main class="page-main">
    <div class="wrapper">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>