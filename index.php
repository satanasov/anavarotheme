<?php get_header(); ?>
<!--// Allocate big image carousel //-->
<div class="container-fluid">
	<?php
		if (get_theme_mod('carousel_active'))
		{
	?>
	
	<div class="row">
		<div class="no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php if (get_theme_mod('carousel_first_slide_image')) { ?>
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<?php }
					if (get_theme_mod('carousel_second_slide_image')) { ?>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<?php }
					if (get_theme_mod('carousel_third_slide_image')) { ?>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<?php }
					if (get_theme_mod('carousel_fourth_slide_image')) { ?>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<?php }
					if (get_theme_mod('carousel_fifth_slide_image')) { ?>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<?php } ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php if (get_theme_mod('carousel_first_slide_image')) { ?>
					<div class="item active">
						<img src="<?php echo get_theme_mod('carousel_first_slide_image'); ?>" class="img-responsive">
					</div>
					<?php }
					if (get_theme_mod('carousel_second_slide_image')) { ?>

					<div class="item"> 
						<img src="<?php echo get_theme_mod('carousel_second_slide_image'); ?>" class="img-responsive">
					</div>
					<?php } 
					if (get_theme_mod('carousel_third_slide_image')) { ?>
					<div class="item">
						<img src="<?php echo get_theme_mod('carousel_third_slide_image'); ?>" class="img-responsive">
					</div>
					<?php } 
					if (get_theme_mod('carousel_fourth_slide_image')) { ?>
					<div class="item">
						<img src="<?php echo get_theme_mod('carousel_fourth_slide_image'); ?>" class="img-responsive">
					</div>
					<?php } 
					if (get_theme_mod('carousel_fifth_slide_image')) { ?>
					<div class="item">
						<img src="<?php echo get_theme_mod('carousel_fifth_slide_image'); ?>" class="img-responsive">
					</div>
					<?php } ?>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<div class="wraper">
		<?php } ?>
	<div class="splitter"></div>
	<div class="container">
		<div class="row" id="badges">
			<div id="leftBadge" class="col-md-4">
				<span class="icon"><i class="fa fa-rebel fa-5x"></i></span>
				<span class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.</span>
			</div>
			<div id="midleBadge" class="col-md-4">
				<span class="icon"><i class="fa fa-camera-retro fa-5x"></i></span>
				<span class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.</span>
			</div>
			<div id="midleBadge" class="col-md-4">
				<span class="icon">T</span>
				<span class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.</span>
			</div>
		</div>
	</div>
	<div class="splitter"></div>
<?php 
	/**
	* Get last 4 posts so we cen fill the fields
	*/
	$args = array(
		'numberposts' => 5,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status'      => 'publish',
	);
	$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
	//var_dump(get_permalink($recent_posts[0]['ID']));
?>
	<div class="row" id="latest">
		<p class="text-center">Latest blog posts ... </p>
	</div>
	<div class="row" id="posts">
		<div class="col-sm-1 col-lg-1"></div>
		<div class="col-sm-5 col-md-3 col-lg-2 card">
			<a href="<?php echo get_permalink($recent_posts[0]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[0]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[0]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive"/>
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[0]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[0]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-lg-2 card">
			<a href="<?php echo get_permalink($recent_posts[1]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[1]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[1]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive"/>
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[1]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[1]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0 card ">
			<a href="<?php echo get_permalink($recent_posts[2]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[2]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[2]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive"/>
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[2]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[2]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-0 card">
			<a href="<?php echo get_permalink($recent_posts[3]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[3]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[3]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive"/>
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[3]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[3]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-sm-offset-1 col-md-3  col-md-offset-0 col-lg-2 col-lg-offset-0 card">
			<a href="<?php echo get_permalink($recent_posts[4]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[4]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[4]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive"/>
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[4]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[4]['post_excerpt'] ?></span>
		</div>
	</div>
<div class="splitter"></div>
</div>
<?php get_footer(); ?>