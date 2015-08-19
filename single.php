<?php get_header(); ?>
<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php if(!empty($img)) : ?>
	<div class="row" id="hero" style="background-image: url(<?php echo $img[0]; ?>)"></div>
<?php else : ?>
	<div class="row" id="hero" style="background-image: url(<?php echo get_template_directory_uri() . '/img/waves_bw.png'; ?>)"></div>
<?php endif; ?>
<?php get_template_part('partials/navbar'); ?>
<div id="single-content">
	<div class="content-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="content-inner">
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>