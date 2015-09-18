<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header" style="text-align:center">
					<div class="hd twelve columns"><?php echo single_cat_title( '', true ); ?></div>
				</header>

				<div class="container">
				<?php $counter = 0; ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="three columns space" style="text-align:center;margin-bottom:10px">
						<?php if(has_post_thumbnail()) {                    
						    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
						    ?>
						    <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
					    	<?php
						    echo '<img src="' . $image_src[0]  . '" width="100%"  /></a>';
						} ?>
						<div style="width:80%;margin:0 10%">
				        	<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				        </div>
					</div>

					<?php
						$counter++;
						if($counter == 4){
							echo '<div class="clear"></div>';
							$counter = 0;
						}
					?>

				<?php endwhile; ?>
				</div>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
