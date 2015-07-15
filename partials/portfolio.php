<div class="row" id="portfolio">
	<div class="content-wrapper">
		<div class="heading">Portfolio</div>
				<div class="row">
				<?php
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 6,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$posts = get_posts($args);
					// var_dump($posts);
					if( !empty($posts) ) : foreach($posts as $post) :
				?>
				<div class="col-sm-4">
				<div class="portfolio-wrapper">
					<a href="<?php the_permalink(); ?>">
						<?php if(get_field('thumbnail')) : $img = get_field('thumbnail'); ?>
							<div class="overlay"></div>
							<img src="<?php echo $img['url']; ?>" alt="" class="portfolio-thumb">
							<div class="post-title">
								<?php if($post->post_title) { echo $post->post_title; } ?>
							</div>


						<?php endif; ?>
					</a>
				</div>
			</div>
			<?php endforeach; endif; ?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>