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
				<div class="container">

					<?php if ( have_posts() ) : ?>

						<header class="page-header" style="text-align:center">
							<h1 class="twelve columns"><?php echo single_cat_title( '', true ); ?></h1>
						</header>

						<div id="dyn">
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

					<a id="inifiniteLoader">Loading... <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ajax-loader.gif" /></a>
				</div>
			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php if( is_category() ) : ?>
	<script type="text/javascript">
	var $j = jQuery.noConflict();
	$j(document).ready(function(){

		var slug = <?php 
				 	$cat = get_query_var('cat');
				  	$yourcat = get_category ($cat);
				  	echo json_encode($yourcat->slug);
		        	?>;

		function loadArticle(pageNumber){   
          	$j('a#inifiniteLoader').show('fast');
		    $j.ajax({
		        url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
		        type:'POST',
		        data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop&slug=' + slug,
		        success: function(html){                          
		        	$j('a#inifiniteLoader').hide('1000');
		            $j("#dyn").append(html);
		            $j('#content').css({height: Math.max($j('.container').height(), $j(window).height() - $j('#colophon').height() - parseInt($j('#content').css('padding-bottom'), 10) - parseInt($j('#content').css('margin-bottom'), 10))});
		        }
		    });
		    return false;
		} 

		var count = 2;
		var total = <?php echo $wp_query->max_num_pages; ?>;
		loadArticle(1);
		$j(window).scroll(function(){
			if  ($j(window).scrollTop() == $j(document).height() - $j(window).height()){
				if (count > total){
					return false;
				}else{
					loadArticle(count);
				}
				count++;
			}
		}); 
	});
	</script>
<?php endif; ?>