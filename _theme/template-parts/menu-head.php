<header id="header" class="header">
		<div class="header__container _container">

			<div class="header__row d-flex">

				<a href="<? bloginfo("url"); ?>" class="header__logo logo-icon">
					<svg>
						<use xlink:href="#logo"></use>
					</svg>
					
				</a>
				
				<?php wp_nav_menu([
					'theme_location'  => 'main_menu',
					'container' => '',
					'menu_class' => 'header__menu-list menu-list d-flex',
				])?>
				
				<div class="phone_blk">
					<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone1' ); ?>"><?php echo carbon_get_theme_option( 'phone1' ); ?></a>
					<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone2' ); ?>"><?php echo carbon_get_theme_option( 'phone2' ); ?></a>
					<a class="h_mail" href="mailto:<?php echo carbon_get_theme_option( 'email' ); ?>"><?php echo carbon_get_theme_option( 'email' ); ?></a>
				</div>

				<button type="button" class="header__icon-menu icon-menu" aria-label="Иконка бургера">
					<span></span>
					<span></span>
					<span></span>
				</button>

			</div>

		</div>
	</header>