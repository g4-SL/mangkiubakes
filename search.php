<?php
/**
 * Template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<div class="container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that
						 * will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>
				</div>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<div style="width:70%;margin:0 auto"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/notfound.png" alt="" style="width:100%"></div>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( "Oh well, this is embarrassing. Seems like we've never heard of this special ingredient. We're always experimenting and pushing the boundary to create delicious bake goods for our clients. Till then, please take a look at our other best selling bakes, or search for something else that comes to your mind", 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>