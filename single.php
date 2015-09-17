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

				</div>

				<?php

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				 <ul> 
			        <li>
			        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			        </li>
			    </ul>   
				<?php }
				wp_reset_postdata(); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>