<?php 
get_header();
if (have_posts()){
	the_post();
	?>
	<div class="container-fluid info-main">
		<div class="wraper">
			<div class="row">
				<div class="col-md-4 col-lg-4 info-image">
					<?php 
					if (has_post_thumbnail()) {
						$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
					}
					else
					{
						$image[0] = get_template_directory_uri() . '/img/no_photo_256.png';
					}
					?>
					<img src="<?php echo $image[0] ?>" class="image-responsive center-block img-circle"/></a>
				</div>
				<div class="col-md-8 col-lg-8 info-main-info">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<h1 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<h1 class="text-center"><i><?php echo get_post_meta(get_the_ID(), 'usertitle', true); ?></i></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-6 main-contacts">
							<?php
								$contacts = get_post_meta(get_the_ID(), 'contacts', true);
								foreach ($contacts as $contact)
								{
									switch ($contact['type'])
									{
										case 'phone':
											?>
											<div class="row">
												<div class="col-md-12 col-lg-12">
													<h4><i class="fa fa-phone"></i> <?php echo $contact['value']; ?></h4>
												</div>
											</div>
											<?php
										break;
										case 'mail':
											$mail = explode('@', $contact['value']);
											?>
											<div class="row">
												<div class="col-md-12 col-lg-12">
													<h4><i class="fa fa-envelope-o"></i> <script type="text/javascript">writeMail('<?php echo $mail[0]; ?>', '<?php echo $mail[1]; ?>');</script><a href="<?php $contact['extra'] ?>"> <i class="fa fa-lock"></i></h4>
												</div>
											</div>
											<?php
										break;
										case 'url':
											?>
											<div class="row">
												<div class="col-md-12 col-lg-12">
													<h4><i class="fa fa-globe"></i> <a href="<?php echo $contact['value']; ?>" target="_blank"><?php echo $contact['extra']; ?></a></h4>
												</div>
											</div>
											<?php
										break;
									}
								}
							?>
						</div>
						<div class="col-md-6 col-lg-6 secondary-contacts">
							<?php
								$secondary_contacts = get_post_meta(get_the_ID(), 'secondary_contacts', true);
								foreach ($secondary_contacts as $contact)
								{
									?>
										<h2 style="display: inline-block;"><a href="<?php echo $contact['value']; ?>" target="_blank"><i class="fa <?php echo $contact['type']; ?>"></i></a> </h2>
									<?php
								}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12 personal">
							<h2><?php _e('Few words', 'anavaro'); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="half-splitter"></div>
		<div class="wraper">
			<div class="row projects">
				<div class="col-md-12 col-lg-12 title">
					<h1><?php _e('Projects', 'anavaro'); ?></h1>
				</div>
				<?php
					$projects = get_post_meta(get_the_ID(), 'project', true);
					if ($projects)
					{
						foreach ($projects as $project)
						{
							?>
							<div class="row project">
								<div class="col-sm-3 col-md-3 col-lg-3 project-name">
									<a href="<?php echo $project['url']; ?>"><?php echo $project['name']; ?></a>
								</div>
								<div class="col-sm-9 col-md-9 col-lg-9 project-info">
									<?php echo $project['desc']; ?>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
		<div class="half-splitter"></div>
		<div class="wraper">
			<div class="row work">
				<div class="col-md-12 col-lg-12 title">
					<h1><?php _e('Jobs and technical qualifications', 'anavaro'); ?></h1>
				</div>
				<?php
					$jobs = get_post_meta(get_the_ID(), 'work', true);
					if ($jobs)
					{
						foreach ($jobs as $job)
						{
							?>
							<div class="row job">
								<div class="col-sm-3 col-md-3 col-lg-3 job-period">
									<?php echo $job['start'] . ' - ' . $job['end']; ?>
								</div>
								<div class="col-sm-9 col-md-9 col-lg-9 job-info">
									<h3><?php echo $job['position'] ; ?></h3>
									<h4><?php echo $job['company'] ; ?></h4>
									<div class="job-desc">
										<?php echo $job['desc']; ?>
									</div>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</div>
	<?php
}
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
									<?php _e('by ', 'anavaro'); if (get_the_author_meta('user_url') != '') { the_author_link(); } else { the_author_posts_link(); } ?>
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