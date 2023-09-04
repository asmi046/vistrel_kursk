<!-- Мобильное меню -->
<div class="header__mob-menu mob-menu">

	<?php wp_nav_menu([
						'theme_location'  => 'mobile_menu',
						'container' => '',
						'menu_class' => 'mob-menu__list',
					])?>
	
	<div class="phone_blk">
		<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone1' ); ?>"><?php echo carbon_get_theme_option( 'phone1' ); ?></a>
		<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone2' ); ?>"><?php echo carbon_get_theme_option( 'phone2' ); ?></a>
		<a class="h_mail" href="mailto:<?php echo carbon_get_theme_option( 'email' ); ?>"><?php echo carbon_get_theme_option( 'email' ); ?></a>
	</div>

</div>