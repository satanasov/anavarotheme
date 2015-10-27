<?php get_header(); ?>

<div class="container-fluid">
	<div class="wraper" id="posts">
		<div class="row">
			<?php
			if (have_posts()){
				while(have_posts())
				{
					the_post();
				?>
					<div class="col-md-9 col-lg-9">
						<div id="single-post">
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12 center-text author">
									by <?php the_author_link(); ?>
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
											?><li><a href="<?php echo get_tag_link($tag->id); ?>"><?php echo $tag->name; ?></li></a><?php
										}
									?>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
									<i class="fa fa-calendar fa-2x"></i><p class="date"><?php the_date(); ?>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
									<i class="fa fa-comments-o fa-2x"></i><p class="comments"><?php comments_popup_link('Коментирай ...', '1 коментар', '% коментара'); ?>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
									<i class="fa fa-folder-open-o fa-2x"></i><p class="comments"><?php the_category(', '); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12" id="comment-form">
									 <?php comments_template('', true); ?>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
			} 
			?>
			<div class="col-md-3 col-lg-3">
				<?php get_sidebar('right'); ?>
			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
