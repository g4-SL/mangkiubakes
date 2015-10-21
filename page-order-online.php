<?php
/**
 * Template for order online content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven Child
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<div class="container">
					<div class="twelve columns"><h1  class="text-dashed center"><?php echo get_the_title(); ?></h1></div>
				</div>
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>