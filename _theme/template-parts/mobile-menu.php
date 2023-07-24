<!-- Мобильное меню -->
<div class="header__mob-menu mob-menu">

<?php wp_nav_menu([
					'theme_location'  => 'mobile_menu',
					'container' => '',
					'menu_class' => 'mob-menu__list',
				])?>
	<!-- <ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Сведения об образовательной организации</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Нормативные правовые акты</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Услуги</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Реквизиты</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Контакты</a></li>
	</ul> -->
</div>