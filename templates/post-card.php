<?php
$post_thumbnail_url = get_the_post_thumbnail_url($post->ID, 'mid-thumbnail');
$post_title = $post->post_title;
$post_link = get_post_permalink($post->ID);
?>
<a href="<?= $post_link; ?>" class="post-card">
    <img class="post-card-thumbnail" src="<?= $post_thumbnail_url; ?>" alt="<?= $post_title; ?>">
    <p><?= $post_title; ?></p>
    <?php include get_template_directory() . ("/icons/post-card-link.svg"); ?>
</a>