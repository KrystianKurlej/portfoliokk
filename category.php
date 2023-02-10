<?php get_header(); ?>

<header class="category-header">
    <div class="wrapper">
        <h1 class="title">
            <?php single_cat_title(); ?>
        </h1>
        <?= category_description(); ?>
    </div>
</header>

<main class="category-main">
    <div class="posts posts-2">
        <div class="wrapper">
            <?php
            $category_id = get_queried_object_id();
            $args = array(
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date',
                'category' => $category_id
            );
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post);
                include get_template_directory() . ("/templates/post-card.php");
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
