<?php get_header(); ?>
<!--// Allocate big image carousel //-->
<div class="row" id="carousel">
	<div id="image1" class="baners">
		<img src="<?php echo get_template_directory_uri() . '/img/markus_spike.jpg'; ?>" class="img-responsive">
		<div class="overlay">
			<span class="tagline">Lorem ipsum lare iquepsum ipsum!</span>
			<span class="smalltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nisl eget tortor placerat tempus. Nunc ut nisi vel lectus egestas venenatis. In quam felis, scelerisque at cursus non, hendrerit a dui. Duis eget massa tortor. Nulla facilisi nullam.</span>
		</div>
	</div>
	<div id="image2" class="baners hidden">
		<img src="<?php echo get_template_directory_uri() . '/img/markus_spiske2.jpg'; ?>" class="img-responsive">
		<div class="overlay">
			<span class="tagline">Lorem ipsum lare iquepsum ipsum!</span>
			<span class="smalltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nisl eget tortor placerat tempus. Nunc ut nisi vel lectus egestas venenatis. In quam felis, scelerisque at cursus non, hendrerit a dui. Duis eget massa tortor. Nulla facilisi nullam.</span>
		</div>
	</div>
	<div id="image3" class="baners hidden">
		<img src="<?php echo get_template_directory_uri() . '/img/markus_spiske3.jpg'; ?>" class="img-responsive">
		<div class="overlay">
			<span class="tagline">Lorem ipsum lare iquepsum ipsum!</span>
			<span class="smalltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nisl eget tortor placerat tempus. Nunc ut nisi vel lectus egestas venenatis. In quam felis, scelerisque at cursus non, hendrerit a dui. Duis eget massa tortor. Nulla facilisi nullam.</span>
		</div>
	</div>
	<div id="image4" class="baners hidden">
		<img src="<?php echo get_template_directory_uri() . '/img/markus_spike.jpg'; ?>" class="img-responsive">
		<div class="overlay">
			<span class="tagline">Lorem ipsum lare iquepsum ipsum!</span>
			<span class="smalltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nisl eget tortor placerat tempus. Nunc ut nisi vel lectus egestas venenatis. In quam felis, scelerisque at cursus non, hendrerit a dui. Duis eget massa tortor. Nulla facilisi nullam.</span>
		</div>
	</div>
	<div id="image5" class="baners hidden">
		<img src="<?php echo get_template_directory_uri() . '/img/markus_spike.jpg'; ?>" class="img-responsive">
		<div class="overlay">
			<span class="tagline">Lorem ipsum lare iquepsum ipsum!</span>
			<span class="smalltext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nisl eget tortor placerat tempus. Nunc ut nisi vel lectus egestas venenatis. In quam felis, scelerisque at cursus non, hendrerit a dui. Duis eget massa tortor. Nulla facilisi nullam.</span>
		</div>
	</div>
</div>
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
		<div class="col-sm-5 col-md-3 col-lg-2">
			<a href="<?php echo get_permalink($recent_posts[0]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[0]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[0]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive" width="100%" height="100%" />
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[0]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[0]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-lg-2">
			<a href="<?php echo get_permalink($recent_posts[1]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[1]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[1]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive" width="100%" height="100%" />
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[1]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[1]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-lg-2">
			<a href="<?php echo get_permalink($recent_posts[2]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[2]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[2]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive" width="100%" height="100%" />
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[2]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[2]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-lg-2">
			<a href="<?php echo get_permalink($recent_posts[3]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[3]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[3]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive" width="100%" height="100%" />
					<?php
					unset($image);
				}
			?>
			<span class="title"><?php echo $recent_posts[3]['post_title'] ?></span>
			</a>
			<span class="excerpt"><p><?php echo $recent_posts[3]['post_excerpt'] ?></span>
		</div>
		<div class="col-sm-5 col-md-3 col-lg-2">
			<a href="<?php echo get_permalink($recent_posts[4]['ID']) ?>">
			<?php
				if (has_post_thumbnail( $recent_posts[4]['ID'] ))
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts[4]['ID'] ), 'single-post-thumbnail' );
					?>
						<img src="<?php echo $image[0]?>" class="image-responsive" width="100%" height="100%" />
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
<div class="text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit tristique maximus. Nunc vitae aliquam magna. Curabitur elementum blandit sem, ac tincidunt est. Suspendisse interdum sodales tincidunt. Etiam commodo porttitor tortor, et porttitor metus vestibulum ac. Maecenas scelerisque tortor quis nisl vehicula, et venenatis dolor commodo. Donec lacinia, lorem id ultrices feugiat, tortor sapien luctus leo, ut cursus enim nunc ac nisi. Donec magna dui, vestibulum et viverra ac, pulvinar ac felis. Pellentesque rutrum lacinia dictum.

Quisque eu eros ac justo viverra vehicula. Phasellus sit amet libero dapibus, convallis nulla quis, vulputate neque. Nulla eu eleifend felis, ac aliquam nulla. Vestibulum varius, augue ac cursus fermentum, arcu enim aliquet turpis, nec ultricies mi dolor eu sem. Sed vitae odio sit amet libero vulputate cursus vel bibendum sem. Aliquam pellentesque pretium elit, a fringilla est. Sed ac varius dolor. Phasellus tristique purus ac odio blandit, non dignissim lorem eleifend. Nullam rhoncus, felis sed elementum mattis, nibh dolor maximus massa, ut aliquam lectus sem non justo. Nulla tincidunt rhoncus lorem pellentesque congue. Nunc euismod sapien nunc, suscipit rhoncus tortor sodales eget. Aenean in tristique diam. Curabitur sed tempus leo.

Duis rhoncus quam at aliquam efficitur. In tincidunt, augue efficitur accumsan scelerisque, nibh tellus semper neque, vel iaculis purus eros ac felis. Nulla porttitor luctus egestas. Vestibulum id est nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec convallis purus, sed faucibus libero. Ut mollis faucibus ligula, eget pharetra orci dictum quis. Nullam eu turpis ipsum. Ut maximus vestibulum massa et rhoncus. Etiam scelerisque, enim ut lacinia rhoncus, lectus magna fringilla dolor, sed dictum mauris nisi id mi. Aenean luctus eu enim at blandit. Integer commodo lobortis dui. Etiam sit amet metus laoreet, sollicitudin velit id, sagittis enim. Sed a justo semper, efficitur libero sed, molestie tellus.

Morbi tempor tortor scelerisque efficitur fringilla. Suspendisse et augue in metus iaculis egestas. In in nulla id quam interdum pulvinar ac sed nunc. Donec vel nulla diam. Maecenas finibus dignissim dolor, nec volutpat nunc pharetra et. Integer id urna volutpat, faucibus massa eu, vulputate tortor. Proin quis ipsum id ipsum vehicula elementum sed in lorem. Nulla ac rutrum urna. Duis quis suscipit ante. Donec tincidunt pulvinar nunc, vitae eleifend eros pulvinar ac.

Ut sit amet tellus sit amet est convallis cursus in sit amet libero. Quisque elementum neque vel molestie imperdiet. Etiam vulputate enim vel sapien ultrices ultrices. Suspendisse laoreet metus vitae felis consequat, ut varius lorem mattis. Nulla egestas iaculis lorem pharetra convallis. Sed scelerisque, mi sed rutrum accumsan, lorem ipsum facilisis enim, quis ornare urna tellus at metus. Maecenas ac quam dolor. Aenean consectetur, quam non congue feugiat, libero leo vestibulum erat, nec interdum nisi lectus in felis. Etiam lacus felis, luctus a purus sed, tristique iaculis magna. Donec at quam nisl. Sed fermentum placerat lectus ut rhoncus. Aliquam vel dolor id orci dapibus fermentum. Donec et varius quam.
</div>
<?php get_footer(); ?>