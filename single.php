<?php get_header(); ?>

<div id="single-content">
	<?php if( have_rows('screenshots') ) : while ( have_rows('screenshots') ) : the_row(); ?>
		<?php $img = get_sub_field('shot'); ?>
		<div class="slide">
			<img class="hero-img" src="<?php echo $img['url']; ?>" alt="">
		</div>
	<?php endwhile; endif; ?>
	<a href="/#portfolio">
		<div class="back-arrow">
			<i class="fa fa-long-arrow-left"></i>
		</div>
	</a>
</div>

<?php get_footer(); ?>