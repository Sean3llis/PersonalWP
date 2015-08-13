<div class="row" id="portfolio">
	<div class="content-wrapper">
	<div class="heading-wrapper">
		<h2>Portfolio</h2>
		<div class="subheading">& client work</div>
	</div>
				<?php
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 8,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$posts = get_posts($args);
					if( !empty($posts) ) : ?>
					<div class="row">
					<?php foreach($posts as $post) : ?>

				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
					<div class="col-sm-3 portfolio-wrapper">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo $thumb[0]; ?>" alt="<?php echo $post->post_title; ?>" class="portfolio-thumb">
						</a>
					</div>








			<?php endforeach; ?>
			</div>
			<?php endif; ?>
	</div>
</div>