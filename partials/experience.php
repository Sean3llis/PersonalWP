<div class="row" id="experience">
	<div class="content-wrapper">
		<div class="heading">
			Work Experience
		</div>

		<?php if( have_rows('resume_points') ) : ?>
			<?php while( have_rows( 'resume_points' ) ) : the_row();  ?>
				<div class="row experience-card">
					<div class="card-inner">
						<div class="col-lg-4 col-sm-5 chart-left">
							<div class="date">
								<span><?php the_sub_field('starting_year'); ?>
									<small>
										<?php the_sub_field('starting_month'); ?>
									</small>
								</span>&nbsp;-&nbsp;

								<span><?php the_sub_field('ending_year'); ?>
									<small>
										<?php the_sub_field('ending_month'); ?>
									</small>
								</span>

							</div>
							<div class="company"><?php the_sub_field('company_name'); ?></div>
							<div class="role"><?php the_sub_field('role'); ?></div>
							<div class="tag-wrapper">
						<?php $languages = get_sub_field('languages'); ?>
						<?php if( !empty($languages) ) : foreach ($languages as $language) :?>
							<span class="language lang-<?php echo $language->post_name ?>">
								<?php echo $language->post_title; ?>

							<?php get_template_part('img/svg', 'tag'); ?>
							<hr>

							</span>
						<?php endforeach; endif; ?>
						</div>
						</div>

						<?php if( have_rows('bullets') ) : ?>

							<div class="col-lg-8 col-sm-7 chart-right">
								<ul class="list">
									<?php while( have_rows('bullets') ) : the_row(); ?>
										<li>lorem ipsum et dolor amut ist folumi lorem ipsum et dolor amut ist folumi lorem ipsum et dolor amut ist folumi lorem ipsum et dolor amut ist folumi lorem ipsum et dolor amut ist folumi lorem ipsum et dolor amut ist folumi
										</li>
										<div class="bullet"></div>
									<?php endwhile; ?>
								</ul>
							</div>
							<div class="clearfix"></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; endif;?>

	</div>
</div>