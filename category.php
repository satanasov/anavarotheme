<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$category = get_query_var('cat');
$args = array(
	'paged' => $paged,
	'cat'	=> $category
);
$term = get_term_by('id', $category, 'category');
$query = new WP_Query($args);
?>
<div class="container-fluid">
<div class="wraper" id="posts">
	<div class="row">
		<div class="center-text section-title">
			<H1><i class="fa fa-folder-open-o"></i> <?php echo $term->name; ?></H1>
			<p><?php echo $term->description; ?>
		</div>
	</div>
	<div class="row">
<?php
if ($query->have_posts())
{
	?>
			<div class="col-md-9 col-lg-9">
		<?php
		while ($query->have_posts())
		{
			?>
				<div id="single-post">
				<?php
				$query->the_post();
				//print_r(the_ID());
				if (has_post_thumbnail())
				{
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
					?>
					
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0] ?>" class="image-responsive center-block" style="width: 100%;"/></a>
						</div>
					</div>
					<?php
				}
				?>
				<div class="row">
					<div class="col-md-12 col-lg-12 center-text">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12 center-text author">
						<?php _e('by ', 'anavaro'); if (get_the_author_meta('user_url') != '') { the_author_link(); } else { the_author_posts_link(); } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12" id="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12" id="post-read-more">
						<a href="<?php the_permalink(); ?>"><?php _e('Read more ...', 'anavaro'); ?></a>
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
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
						<i class="fa fa-comments-o fa-2x"></i><p class="comments"><?php comments_popup_link('Коментирай ...', '1 коментар', '% коментара'); ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 postinfo">
						<i class="fa fa-folder-open-o fa-2x"></i><p class="comments"><?php the_category(', '); ?>
					</div>
				</div>
			</div>
			<?php
		}
		?>
			<div class="row paginator  center-text">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php if ($query->max_num_pages > 1 && $paged < $query->max_num_pages) {
						?>
						<div class="alignleft"><?php next_posts_link('&laquo; По-стари ...', $query->max_num_pages); ?></div>
						<?php
					}
					?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php if ($paged > 1) {
						?>
						<div class="alignright"><?php previous_posts_link('По-нови ... &raquo;'); ?></div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	<?php
}
else
{
	?>
	<div class="posting">
		<h1 class="postTitle">Съжалявам, но няма такова нещо ...</h1>
		<p> Това си е 404 - търсиш нещо което го няма!</p>
	</div>
	<?php
}

?>
<div class="col-md-3 col-lg-3">
	<?php get_sidebar('right'); ?>
</div>
</div>
</div>

<?php get_footer(); ?>