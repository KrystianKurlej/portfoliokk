<?php 
get_header(); 

$current_post = get_the_ID();
$current_category = get_the_category($current_post);
$args = array(
    'posts_per_page' => 3,
    'category__in' => array($current_category[0]->term_id),
    'orderby' => 'rand',
    'post__not_in' => array($current_post)
);
$related_posts = get_posts($args);

$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'big-thumbnail');
$title = get_the_title();
$excerpt = get_the_excerpt();

?>
<header class="single-header">
    <div class="wrapper">
        <div class="thumbnail">
            <img src="<?= $thumbnail_url; ?>" alt="<?= $title; ?>">
        </div>
        <div class="content">
            <h1 class="title"><?= $title ?></h1>
            <p class="description"><?= $excerpt; ?></p>
        </div>
    </div>
</header>

<main class="single-main">
    <div class="wrapper">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
