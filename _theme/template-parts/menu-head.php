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
				
				<!-- <ul class="header__menu-list menu-list d-flex">
					<li class="menu-list__item"><a href="#" class="menu-list__link">Сведения об образовательной организации</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Нормативные правовые акты</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Услуги</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Реквизиты</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Контакты</a></li>
				</ul> -->

				<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
							'container_class' => 'menu__list','container' => false )); ?>  -->

				<button type="button" class="header__icon-menu icon-menu" aria-label="Иконка бургера">
					<span></span>
					<span></span>
					<span></span>
				</button>

			</div>

		</div>
	</header>