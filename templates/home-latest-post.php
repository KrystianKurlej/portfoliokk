<?php
    $posts = get_posts(array(
        'posts_per_page' => 1,
        'category_name' => 'portfolio'
    ));

    if(count($posts) > 0){
        $post = $posts[0];
        setup_postdata($post);
        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'big-thumbnail');
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $link = get_post_permalink($post->ID);
    ?>

        <div class="latest-post">
            <div class="content">
                <p class="caption">Latest work</p>
                <h1><?= $title; ?></h1>
                <p class="description"><?= $excerpt; ?></p>
                <a href="<?= $link ?>" class="link">
                    <button class="btn-secondary">
                        Case study
                        <?php include get_template_directory() . ("/icons/arrow-right.svg"); ?>
                    </button>
                </a>
            </div>
            <div class="thumbnail">
                <img src="<?= $thumbnail_url; ?>" alt="<?= $title; ?>">
            </div>
        </div>

    <?php
    wp_reset_postdata();
    }else{
        echo '<p><br />There is no work here yet<br /></p>';
    }
    ?>