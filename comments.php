<!-- comments.php -->
<div id="comments" class="comments-area">
<h3>Commenti</h3>

<?php 
//Get only the approved comments
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );


// Comment Loop
if ( $comments ) {
 foreach ( $comments as $comment ) {?>

    <?php 
    echo '<p>' . $comment->comment_content . '</p>' ;
 }
} else {
 echo 'No comments found.';
}
?>


    <?php comment_form(); ?>
</div>


