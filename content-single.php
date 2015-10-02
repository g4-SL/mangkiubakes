<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven Child
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="hd twelve columns"><?php the_title(); ?></div>

		<?php
		$post_categories = wp_get_post_categories( get_the_ID());
			
		echo '<div class="tt" style="width:90%; margin:0 auto"><ul class="category center">';
		foreach($post_categories as $c){
			$cat = get_category( $c );
			$category_id = get_cat_ID( $cat->slug );
	    	$category_link = get_category_link( $category_id );
			echo '<li><a href="'. $category_link .'">'. $cat->name .'</a></li>';
		}
		echo '</ul></div>';
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
