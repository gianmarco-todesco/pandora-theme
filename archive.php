<?php get_header(); ?>
<!-- archive.php -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<?php

    $args=array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category' => 'Animazioni',
        'meta_query' => array( array( 'key' => '_thumbnail_id'  )  )
    );
    $posts=get_posts($args);    
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
    }
?>

    <br style="clear:left;"/>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
