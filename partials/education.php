<div class="row" id="education">
	<div class="content-wrapper">
	<div class="heading-wrapper">
		<h2>Education</h2>
		<div class="subheading">& Skill Training</div>
	</div>

		<?php if( have_rows('education_points') ) : ?>
			<?php $card_number = 0; ?>
			<?php while( have_rows( 'education_points' ) ) : the_row();  ?>
				<article class="row experience-card">
					<div class="card-inner">
						<div class="col-lg-3 col-sm-5 chart-left">
							<div class="date">
									<?php echo get_sub_field('starting_year'); echo ' - '; ?>

									<?php echo get_sub_field('ending_year'); ?>

							</div>

							<div class="company">
								<?php the_sub_field('company_name'); ?>
							</div>

							<div class="role">
								<?php the_sub_field('role'); ?>
							</div>

							<div class="tag-wrapper">
						<?php $languages = get_sub_field('languages'); ?>
						<?php if( !empty($languages) ) : foreach ($languages as $language) :?>
							<span class="language lang-<?php echo $language->post_name ?>">
							<i class="fa fa-circle"></i>
								<?php echo $language->post_title; ?>
							</span>
						<?php endforeach; endif; ?>
						</div>
						<div class="clearfix"></div>
						
						</div>

						<?php if( have_rows('bullets') ) : ?>

							<div class="col-lg-9 col-sm-7 chart-right">
								<ul class="list">
									<?php while( have_rows('bullets') ) : the_row(); ?>
										<li>
											<?php the_sub_field('point') ?>
											<div class="bullet"></div>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
							<div class="clearfix"></div>
						<?php endif; ?>
					</div>
				</article>
			<?php $card_number++; endwhile; endif;?>

	</div>
</div>