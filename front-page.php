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
					<div class="hds" style="line-height:50px;padding-top:35px">Baked with love and passion</div>
					<div class="hds2" style="line-height:40px">Cause every customer deserves the best</div>
					<div class="hds" style="line-height:40px">+</div>
				        <div class="three columns space">
    						<?php
    							$category_id = get_cat_ID( 'fondant' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/09/cupcake.png" alt="" class="intro-cat"></a>
			            	<div class="pt">Fondant</div>
			            </div>
				        <div class="three columns space">
    						<?php
    							$category_id = get_cat_ID( 'cupcakes' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Cupcakes"><img src="http://localhost/wp/wp-content/uploads/2015/09/cupcake.png" alt="" class="intro-cat"></a>
			            	<div class="pt">Cupcakes</div>
			            </div>
				        <div class="three columns space">
    						<?php
    							$category_id = get_cat_ID( 'cookies' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/09/cupcake.png" alt="" class="intro-cat"></a>
			            	<div class="pt">Cookies</div>
			            </div>
				        <div class="three columns space">
    						<?php
    							$category_id = get_cat_ID( 'cakes' );
						    	$category_link = get_category_link( $category_id );
						    ?>
						    <a href="<?php echo esc_url( $category_link ); ?>" title="Fondant Cakes"><img src="http://localhost/wp/wp-content/uploads/2015/09/cupcake.png" alt="" class="intro-cat"></a>
			            	<div class="pt">Cakes</div>
			            </div>
					</div>

					<div class="clear" style="margin:20px 0"></div>

					<!-- introduction section -->
			        <div class="eight columns space">
		            	<div class="hds" style="line-height:60px">Welcome</div>
		            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		            </div>
			        <div class="four columns space">
		            	<img src="http://localhost/wp/wp-content/uploads/2015/08/cupcakes.jpg" alt="" class="circular" style="float:right">
		            </div>

					<div class="clear" style="margin:20px 0"></div>

					<div style="text-align:center">
				        <div class="three columns space">
			            	<a href="<?php echo esc_url(get_page_link(get_page_by_title('Policies')->ID)) ?>"><img src="http://localhost/wp/wp-content/uploads/2015/01/20141126_104314.jpg" alt="" class="intro-cat"></a>
				        	<div class="pts">Policies</div>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns space">
			            	<a href="<?php echo esc_url(get_page_link(get_page_by_title('Order Online')->ID)) ?>"><img src="http://localhost/wp/wp-content/uploads/2015/03/20150226_131859.jpg" alt="" class="intro-cat"></a>
			            	<div class="pts">Order</div>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns space">
			            	<img src="http://localhost/wp/wp-content/uploads/2015/01/20141209_065949.jpg" alt="" class="intro-cat">
			            	<div class="pts">Price List</div>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
				        <div class="three columns space">
			            	<img src="http://localhost/wp/wp-content/uploads/2015/07/20150318_095325.jpg" alt="" class="intro-cat">
			            	<div class="pts">Feedback</div>
			            	<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
			            </div>
			        </div>

					<div class="clear"></div>
					
					<div style="text-align:center">
				        <div class="four columns space">
			            	<h2>Customer review</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            </div>
				        <div class="four columns space">
			            	<h2>Latest instagram</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/rainbow-cake.jpg" alt="" class="intro-cat">
			            </div>
				        <div class="four columns space">
			            	<h2>Our sister shop</h2>
			            	<img src="http://localhost/wp/wp-content/uploads/2015/08/945png.png" alt="" class="intro-cat">
			            </div>
			        </div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
