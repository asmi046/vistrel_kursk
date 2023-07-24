<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="footer__logo logo-icon">
				<svg>
					<use xlink:href="#logo"></use>
				</svg>
				<!-- <? bloginfo("url"); ?> -->
			</a>

            <?php wp_nav_menu([
					'theme_location'  => 'footer_menu',
					'container' => '',
					'menu_class' => 'footer__menu-list menu-list d-flex',
				])?>
			<!-- <ul class="footer__menu-list menu-list d-flex">
				<li class="menu-list__item"><a href="#" class="menu-list__link">Сведения об образовательной организации</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Нормативные правовые акты</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Услуги</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Реквизиты</a></li>
				<li class="menu-list__item"><a href="#" class="menu-list__link">Контакты</a></li>
			</ul> -->
			<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?>  -->

		</div>

	</div>
</footer>