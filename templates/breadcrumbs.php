<?php if (!is_home() && !is_front_page()) { ?>
    <div class="wrapper">
        <div class="breadcrumbs">
            <?php 
            $categories = get_the_category();
            $separator = ' - ';
            $output = '';
            ?>
            <a href="<?php echo home_url(); ?>">Home</a>
            <?php if($categories){
                echo ($separator);
                foreach($categories as $category) {
                    $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                }
                echo trim($output, $separator);
            }
            if (!is_category()) {
                echo ($separator);
                the_title();
            } ?>
        </div>
    </div>
<?php } ?>