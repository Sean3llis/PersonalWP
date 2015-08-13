<div id="aboutme">
<h1>Sean Ellis</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="bio">
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
</div>