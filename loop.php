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