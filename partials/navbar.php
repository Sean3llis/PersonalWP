<div class="nav-placeholder">
	<div id="navbar">
		<div class="content-wrapper">
			<?php 
			$defaults = array(
			  'container' => false,
			  'theme_location' => 'primary-menu',            
			  'menu_class' => 'list-inline main-nav',
			  'before' => '<div class="nav-swipe"></div>',
			  'after' => '<hr>'
			);
			wp_nav_menu($defaults);
			?>
		</div>
		<div class="bottom-ribbon"></div>
	</div>
</div>
