<?php /* Template Name: Blog Listing */ ?>


<?php get_header(); ?>
<?php get_template_part('partials/hero'); ?>
<?php get_template_part('partials/navbar'); ?>
<div id="blog-list">
	<div class="content-wrapper">
	<div class="blog-wrapper">
		<div class="heading-wrapper">
			<h2>Blog</h2>
			<div class="subheading">Web Development | Web Design</div>
		</div>

		<?php $counter = 1; $posts = get_posts(array(
			'posts_per_page' => '10',
		)); foreach($posts as $post ) : setup_postdata($post); ?>
		<div class="blog-post">
			<a href="<?php the_permalink(); ?>">
				<div class="counter">
					<hr>
					<div class="num"><?php echo $counter; ?></div>
				</div>
				<div class="date">
					<i class="fa fa-calendar-minus-o"></i>
				</div>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
				<div style="background-image: url('<?php echo $url ?>');" class="thumb-wrapper">
				<div class="blog-title-wrapper">

					<h4><?php $title = $post->post_title; if(!empty($title)){echo $title;} ?></h4>
				</div>
				</div>
			</a>
			<div class="excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php $counter++; endforeach; ?>
		
	</div>
	</div>
</div>
<?php get_footer(); ?>