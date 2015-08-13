<div id="navbar">
	<div class="content-wrapper">
	<div class="main-menu-wrapper">
		<?php 
		$defaults = array(
		  'container' => false,
		  'theme_location' => 'primary-menu',            
		  'menu_class' => 'list-inline main-nav',
		  'before' => '<div class="nav-swipe"></div>'
		);
		wp_nav_menu($defaults);
		?>
		
	</div>

	<div class="hamburger">
		<div class="stripe"></div>
		<div class="stripe"></div>
		<div class="stripe"></div>
	</div>
	<div class="nameplate">Sean Ellis</div>

	<div class="clearfix"></div>

</div>
</div>
