<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of the website
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<div class="container">

					<!-- picture slideshow section -->
					<?php if ( function_exists( "easingslider" ) ) { easingslider( 15 ); } ?>

					<!-- category section -->
					<div style="text-align:center">
					<h1>What we do in the MangkiuBakes kitchen</h1>
				        <div class="three columns">
			            	<h2>Fondant Cakes</h2>
    						<?php
    							$category_id = get_cat_ID( 'fondant' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/08/fondant.jpg" alt="" class="intro-cat"></a>
			            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
			            </div>
				        <div class="three columns">
			            	<h2>Cupcakes</h2>
    						<?php
    							$category_id = get_cat_ID( 'cupcakes' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Cupcakes"><img src="http://localhost/wp/wp-content/uploads/2015/08/cupcakes.jpg" alt="" class="intro-cat"></a>
			            	<p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
			            </div>
				        <div class="three columns">
			            	<h2>Cookies</h2>
    						<?php
    							$category_id = get_cat_ID( 'cookies' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/08/cookies.jpg" alt="" class="intro-cat"></a>
			            	<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
			            </div>
				        <div class="three columns">
			            	<h2>Cakes</h2>
    						<?php
    							$category_id = get_cat_ID( 'cakes' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/08/cakes.jpg" alt="" class="intro-cat"></a>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
					</div>

					<div class="clear"></div>

					<!-- introduction section -->
			        <div class="eight columns">
		            	<h1>Welcome</h1>
		            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		            </div>
			        <div class="four columns">
		            	<img src="http://localhost/wp/wp-content/uploads/2015/08/cupcakes.jpg" alt="" class="intro-cat circular">
		            </div>

					<div class="clear"></div>

					<div style="text-align:center">
				        <div class="three columns">
				        	<h2>Policies</h2>
			            	<a href="<?php echo esc_url(get_page_link(get_page_by_title('Policies')->ID)) ?>"><img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat"></a>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns">
			            	<h2>Order here</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns">
			            	<h2>Price List</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns">
			            	<h2>Feedback</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
			        </div>

					<div class="clear"></div>
					
					<div style="text-align:center">
				        <div class="four columns">
			            	<h2>Customer review</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            </div>
				        <div class="four columns">
			            	<h2>Latest instagram</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            </div>
				        <div class="four columns">
			            	<h2>Our sister shop</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/945png.png" alt="" class="intro-cat">
			            </div>
			        </div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
