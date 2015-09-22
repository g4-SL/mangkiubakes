<?php
/**
 * Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<div style="margin:0 auto;max-width:80%">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="http://localhost/wp/wp-content/uploads/2015/09/logo.png" alt="" style="width:100%"></a>
			</div>

			<nav id="side-nav" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<?php if ( ! is_singular() ) : ?>
					<div class="skip-link"><a class="assistive-text" href="#secondary"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php endif; ?>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>

			<div style="text-align:center;width:80%;margin:auto">
				<?php get_search_form(); ?>
			</div>

			<div class="clear"></div>

			<div class="container" style="width:85%;margin:0 auto;">
				<div style="width:19%;float:left;margin:0 3%">
					<img src="http://localhost/wp/wp-content/uploads/2015/09/ig.png" alt="" style="width:100%">
				</div>
				<div style="width:19%;float:left;margin:0 3%">
					<img src="http://localhost/wp/wp-content/uploads/2015/09/fb.png" alt="" style="width:100%">
				</div>
				<div style="width:19%;float:left;margin:0 3%">
					<img src="http://localhost/wp/wp-content/uploads/2015/09/pinterest.png" alt="" style="width:100%">
				</div>
				<div style="width:19%;float:left;margin:0 3%">
					<img src="http://localhost/wp/wp-content/uploads/2015/09/twitter.png" alt="" style="width:100%">
				</div>
			</div>

		</div><!-- #secondary .widget-area -->
<?php endif; ?>