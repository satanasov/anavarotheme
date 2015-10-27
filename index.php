<?php get_header(); ?>

<!--// Allocate big image carousel //-->
<div class="container-fluid">
	<?php
		// As we can't get default values for theme options we are going to play with it
		$carousel_active = (get_theme_mod('carousel_active') ? get_theme_mod('carousel_active') : 1);
		if ($carousel_active)
		{
			$carousel_first = get_theme_mod('carousel_first_slide_image', get_template_directory_uri() . '/img/4054180179_e146a52baa_o.jpg');
			$carousel_first_text = get_theme_mod('carousel_first_slide_text', 'Lorem ipsum dolor sit amet amet.');
			$carousel_first_text_pos = get_theme_mod('carousel_first_slide_text_pos', 'center');
			$carousel_first_text_url = get_theme_mod('carousel_first_slide_text_url', '#');
			$carousel_second = get_theme_mod('carousel_second_slide_image', get_template_directory_uri() . '/img/18046343975_65c2031027_k.jpg');
			$carousel_second_text = get_theme_mod('carousel_second_slide_text', 'Lorem ipsum dolor sit amet amet.');
			$carousel_second_text_pos = get_theme_mod('carousel_second_slide_text_pos', 'center');
			$carousel_second_text_url = get_theme_mod('carousel_second_slide_text_url', '#');
			$carousel_third = get_theme_mod('carousel_third_slide_image', get_template_directory_uri() . '/img/8499155449_1235a88784_k.jpg');
			$carousel_third_text = get_theme_mod('carousel_third_slide_text', 'Lorem ipsum dolor sit amet amet.');
			$carousel_third_text_pos = get_theme_mod('carousel_third_slide_text_pos', 'center');
			$carousel_third_text_url = get_theme_mod('carousel_third_slide_text_url', '#');
			$carousel_fourth = get_theme_mod('carousel_fourth_slide_image', '');
			$carousel_fourth_text = get_theme_mod('carousel_fourth_slide_text', '');
			$carousel_fourth_text_pos = get_theme_mod('carousel_fourth_slide_text_pos', 'center');
			$carousel_fourth_text_url = get_theme_mod('carousel_fourth_slide_text_url', '#');
			$carousel_fifth = get_theme_mod('carousel_fifth_slide_image', '');
			$carousel_fifth_text = get_theme_mod('carousel_fifth_slide_text', '');
			$carousel_fifth_text_pos = get_theme_mod('carousel_fifth_slide_text_pos', 'center');
			$carousel_fifth_text_url = get_theme_mod('carousel_fifth_slide_text_url', '#');
	?>
	
	<div class="row">
		<div class="no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php if ($carousel_first) { ?>
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<?php }
					if ($carousel_second) { ?>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<?php }
					if ($carousel_third) { ?>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<?php }
					if ($carousel_fourth) { ?>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<?php }
					if ($carousel_fifth) { ?>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<?php } ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php if ($carousel_first) { ?>
					<div class="item active">
						<img src="<?php echo $carousel_first; ?>" class="img-responsive">
						<?php if ($carousel_first_text) { ?>
						<div class="carousel-caption">
							<h1 style="text-align: <?php echo $carousel_first_text_pos ?>;"><?php if($carousel_first_text_url) { echo '<a href="' . $carousel_first_text_url . '">'; } ?><?php echo $carousel_first_text ?><?php if($carousel_first_text_url) { echo '</a>'; } ?></h1>
						</div>
						<?php } ?>
					</div>
					<?php }
					if ($carousel_second) { ?>

					<div class="item"> 
						<img src="<?php echo $carousel_second; ?>" class="img-responsive">
						<?php if ($carousel_second_text) { ?>
						<div class="carousel-caption">
							<h1 style="text-align: <?php echo $carousel_second_text_pos ?>;"><?php if($carousel_second_text_url) { echo '<a href="' . $carousel_second_text_url . '">'; } ?><?php echo $carousel_second_text ?><?php if($carousel_second_text_url) { echo '</a>'; } ?></h1>
						</div>
						<?php } ?>
					</div>
					<?php } 
					if ($carousel_third) { ?>
					<div class="item">
						<img src="<?php echo $carousel_third; ?>" class="img-responsive">
						<?php if ($carousel_third_text) { ?>
						<div class="carousel-caption">
							<h1 style="text-align: <?php echo $carousel_third_text_pos ?>;"><?php if($carousel_third_text_url) { echo '<a href="' . $carousel_third_text_url . '">'; } ?><?php echo $carousel_third_text ?><?php if($carousel_third_text_url) { echo '</a>'; } ?></h1>
						</div>
						<?php } ?>
					</div>
					<?php } 
					if ($carousel_fourth) { ?>
					<div class="item">
						<img src="<?php echo $carousel_fourth; ?>" class="img-responsive">
						<?php if ($carousel_fourth_text) { ?>
						<div class="carousel-caption">
							<h1 style="text-align: <?php echo $carousel_fourth_text_pos ?>;"><?php if($carousel_fourth_text_url) { echo '<a href="' . $carousel_fourth_text_url . '">'; } ?><?php echo $carousel_fourth_text ?><?php if($carousel_fourth_text_url) { echo '</a>'; } ?></h1>
						</div>
						<?php } ?>
					</div>
					<?php } 
					if ($carousel_fifth) { ?>
					<div class="item">
						<img src="<?php echo $carousel_fifth; ?>" class="img-responsive">
						<?php if ($carousel_fifth_text) { ?>
						<div class="carousel-caption">
							<h1 style="text-align: <?php echo $carousel_fifth_text_pos ?>;"><?php if($carousel_fifth_text_url) { echo '<a href="' . $carousel_fifth_text_url . '">'; } ?><?php echo $carousel_fifth_text ?><?php if($carousel_fifth_text_url) { echo '</a>'; } ?></h1>
						</div>
						<?php } ?>
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
	<?php 
		// Time to define 3cols options
		$feature_active = get_theme_mod('feature_active', 1);
		if ($feature_active) {	
	?>
	<div class="container">
		<div class="row" id="badges">
			<div id="leftBadge" class="col-md-4">
				<span class="icon"><i class="fa <?php echo get_theme_mod('feature_first_icon', 'fa-rebel'); ?> fa-5x"></i></span>
				<span class="text"><?php echo html_entity_decode(get_theme_mod('feature_first_text', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.')); ?></span>
			</div>
			<div id="midleBadge" class="col-md-4">
				<span class="icon"><i class="fa <?php echo get_theme_mod('feature_second_icon', 'fa-camera-retro'); ?> fa-5x"></i></span>
				<span class="text"><?php echo html_entity_decode(get_theme_mod('feature_second_text', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.')); ?></span>
			</div>
			<div id="midleBadge" class="col-md-4">
				<span class="icon"><i class="fa <?php echo get_theme_mod('feature_third_icon', 'fa-hand-lizard-o'); ?> fa-5x"></i></span>
				<span class="text"><?php echo html_entity_decode(get_theme_mod('feature_third_text', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.')); ?></span>
			</div>
		</div>
	</div>
	<?php } ?>
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
		<p class="text-center"><?php if (get_option('page_for_posts')) { echo '<a href="' . get_permalink(get_option('page_for_posts')) . '">'; } ?>Latest blog posts ... <?php if (get_option('page_for_posts')) { echo '</a>'; } ?></p>
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