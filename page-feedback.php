<?php
/**
 * Template for feedback content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven Child
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<div class="container">
					<div class="hd twelve columns"><?php echo get_the_title(); ?></div>
				</div>
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>