<?php 
/**
 * Template Name: Full width (no right sidebar)
 *
 * @package WordPress
 * @subpackage Anavaro
 * @since Anavaro 2.0
 */
get_header();
?>

<div class="container-fluid">
	<div class="wraper" id="posts">
		<div class="row">
			<?php
			if (have_posts()){
				while(have_posts())
				{
					the_post();
				?>
					<div class="">
						<div id="single-post-full" class="">
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12 center-text author">
									<?php _e('by ', 'anavaro'); the_author_link(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12 center-text content">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12" id="post-tags">
									<ul>
									<?php 
										$posttags = get_the_tags();
										foreach ($posttags as $tag)
										{
											?><li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></li></a><?php
										}
									?>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
									<i class="fa fa-calendar fa-2x"></i><p class="date"><?php the_date(); ?>
								</div>
								<?php if (comments_open(get_the_ID())) { ?>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
									<i class="fa fa-comments-o fa-2x"></i><p class="comments"><?php comments_popup_link('Коментирай ...', '1 коментар', '% коментара'); ?>
								</div>
								<?php } ?>
							</div>
							<?php if (comments_open(get_the_ID())) { ?>
							<div class="row">
								<div class="col-md-12 col-lg-12" id="comment-form">
									 <?php comments_template('', true); ?>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				<?php
				}
			} 
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>