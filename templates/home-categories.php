<?php
$portfolio_category = get_category_by_slug('portfolio');
$portfolio_category_id = $portfolio_category->term_id;
$portfolio_category_description = $portfolio_category->category_description;
$portfolio_category_link = get_category_link($portfolio_category_id);

$subcategories = array(
    'ui-ux',
    'dtp',
    '3d-renders',
    'logo-design',
    'front-end-projects'
);

foreach ($subcategories as $subcategory_slug) {
    $subcategory = get_category_by_slug($subcategory_slug);
    if (!$subcategory) continue;

    $subcategory_id = $subcategory->term_id;
    $subcategory_name = $subcategory->name;
    $subcategory_link = get_category_link($subcategory_id);
    $subcategory_posts = get_posts(array(
        'posts_per_page' => 4,
        'category' => $subcategory_id
    ));
    ?>
    <section class="category-section">
    <div class="section-header">
        <div class="wrapper">
            <h2 class="subcategory-title"><?= $subcategory_name; ?></h2>
            <a href="<?= $subcategory_link; ?>" class="subcategory-link">
                <button class="btn-secondary">View <?= $subcategory_name; ?></button>
            </a>
        </div>
    </div>
    <div class="posts posts-4">
        <div class="wrapper">
            <?php
            foreach ($subcategory_posts as $post) {
                include get_template_directory() . ("/templates/post-card.php");
            }
            ?>
        </div>
    </div>
</section>
<?php
}
?>
</div>
</section>