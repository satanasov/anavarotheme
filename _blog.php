<?php 
/**
 * Template Name: Blog page
 *
 * @package WordPress
 * @subpackage Anavaro
 * @since Anavaro 2.0
 */
get_header();

// Let's query some posts

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'paged' => $paged
);

$query = new WP_Query($args);
?>
<div class="container-fluid">
<div class="wraper" id="posts">
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
						by <?php the_author_link(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12" id="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12" id="post-read-more">
						<a href="<?php the_permalink(); ?>">Read more ...</a>
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
			</div>
			<?php
		}
		?>
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