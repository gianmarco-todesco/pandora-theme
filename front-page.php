<?php
/**
 * Template Name: Front Page Template
 *
 * Description: a simple front-page
 * 
 * @package WordPress
 * @subpackage my-theme
 * @since my-theme 1.0
 */

get_header(); ?>
<div style="position:relative">
   <canvas id="viewer"></canvas>
   <div style="position:absolute;margin:auto;color:white;width:100%;top:0;text-align:center;pointer-events:none;">
      <h1 style="font-size:120px;margin:0;width:100%;">PANDORA</h1>
      <h2 style="font-size:40px;margin:0;width:100%;">Matematica animata</h2>
   </div>
</div>

<div class="showcase">
    <?php
    $originalpost = $post;
    $args=array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category' => 'Animazioni',
        'meta_query' => array( array( 'key' => '_thumbnail_id'  )  )
    );
    $posts=get_posts($args);    
    foreach($posts as $post) { ?>
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(array(100,100)); ?></a>
    <?php } 
    
    $post = $originalpost ;
    ?>
</div>

    <?php setup_postdata($post); ?>
    <?php get_template_part( 'content', 'page' ); ?>


<!-- ?php get_sidebar( 'front' ); ?-->


<?php get_footer(); ?>