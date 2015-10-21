<?php
/**
 * Template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="five columns space">
			<?php if(has_post_thumbnail()) {                    
			    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
			    ?>
			    <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
		    	<?php
			    echo '<img src="' . $image_src[0]  . '" width="100%"  /></a>';
			} ?>
		</div>
		<div class="seven columns space">
			<div class="entry-header">
				<h2 class="cursive"><?php the_title(); ?></h2>

				<?php
				$post_categories = wp_get_post_categories( get_the_ID());
					
				echo '<div class="tt"><ul class="category">';
				foreach($post_categories as $c){
					$cat = get_category( $c );
					$category_id = get_cat_ID( $cat->slug );
			    	$category_link = get_category_link( $category_id );
					echo '<li><a href="'. $category_link .'">'. $cat->name .'</a></li>';
				}
				echo '</ul></div>';
				?>

			</div>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>

		<div class="clear"></div>

	</article><!-- #post-<?php the_ID(); ?> -->
