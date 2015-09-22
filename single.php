<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<div class="container">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content-single', get_post_format() ); ?>

					<?php endwhile; // end of the loop. ?>

					<div style="margin:40px 0 10px 0;backgroun-color:"><h2 style="text-align:center">Other bakes we cook up in our kitchen</h2></div>

					<?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>

			    	<div class="three columns space" style="text-align:center;margin-bottom:10px">   
						<?php 
					    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
					    ?>
					    <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
				    	<?php
					    echo '<img src="' . $image_src[0]  . '" width="100%"  /></a>'; ?>
						<div style="width:80%;margin:0 10%">
				        	<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				        </div>
					</div>
					<?php }
					wp_reset_postdata(); ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>