<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage my-theme
 * @since my-theme 1.0
 */
?>

<?php if(is_page()) : ?>

<!-- p>SONO UNA PAGINA, DENTRO content.php</p -->

<div id="main-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content();

			// wp_link_pages(
			// 	array(
			// 		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
			// 		'after'       => '</div>',
			// 		'link_before' => '<span>',
			// 		'link_after'  => '</span>',
			// 		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
			// 		'separator'   => '<span class="screen-reader-text">, </span>',
			// 	)
			// );
			?>
	</div><!-- .entry-content -->
	<?php
	// Author bio.
	if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'author-bio' );
		endif;
	?>
	<!-- 
		footer class="entry-footer">
		< ? php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer -->
	<!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- main-container -->


<?php else: ?>

	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php
		$animation_div = get_post_meta($post->ID, 'animation-div', true);
		if($animation_div) echo '<div class="animation-div">' . $animation_div . '</div>';
	?>
		
	<h1><?php the_title(); ?></h1>
	<div class="article-info">
		<p><?php the_date(); ?></p>
		<p>di <?php the_author_link(); ?></p>
		<p><?php echo get_comments_number(); ?> comments</p>
		<p class="previous-next"><?php previous_post_link("prec.: %link"); ?>|
			<?php next_post_link("succ.: %link"); ?></p>
	</div>
	


	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php
	// Author bio.
	//if ( is_single() && get_the_author_meta( 'description' ) ) :
	//	get_template_part( 'author-bio' );
	//	endif;

		get_template_part( 'author-bio' );
	?>

	<!-- 
		footer class="entry-footer">
		< ? php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer -->
	<!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
<p style="clear:left;"></p>
<?php endif; ?>
