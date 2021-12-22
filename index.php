<?php get_header(); ?>
<!-- index.php -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<?php
//loop through category
$cat_args=array(
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories=get_categories($cat_args);
foreach($categories as $category) { 
    //loop through posts of category
    $args=array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category__in' => array($category->term_id)
    );
    $posts=get_posts($args);
    if ($posts) {?>

        <p>Category: <a href="<?php echo get_category_link( $category->term_id );?>"><?php echo $category->name; ?></a> </p>
        <div class="post-ref-group">
        <?php
        foreach($posts as $post) {
            if ( has_post_thumbnail() ) {
                setup_postdata($post);
                ?>

            
                <a class="post-ref" href="<?php the_permalink() ?>">
                    <div class="post-ref-div">

                        <img class="thumbnail" 
                            src="<?php the_post_thumbnail_url('full'); ?>" 
                            title="<?php the_title(); ?>" 
                            alt="<?php the_title(); ?>" />
                    
                        <div class="title"><?php the_title(); ?></div>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </a>
            <?php
            }
        }?>
        </div>
        <?php
    }
}
?>
    <br style="clear:left;"/>
	</main><!-- .site-main -->
   </div><!-- .content-area -->

<?php get_footer(); ?>
