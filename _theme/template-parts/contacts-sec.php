<section class="contacts-sec">
				<div class="_container">

					<div class="contacts-sec__box">
						<div class="contacts-sec__nuar">
							<picture>
								<source srcset="<?php echo get_template_directory_uri();?>/img/contacts-nuar.webp" type="image/webp">
								<img src="<?php echo get_template_directory_uri();?>/img/contacts-nuar.png?_v=1689970479121" alt="Затемнение">
							</picture>
						</div>
						<div class="contacts-sec__descp">
							<h2 class="contacts-sec__title">Контакты</h2>
							<a href="tel:<?php echo carbon_get_theme_option( 'phone1' ); ?>" class="contacts-sec__tel">
								<svg>
									<use xlink:href="#phone"></use>
								</svg>
								<?php echo carbon_get_theme_option( 'phone1' ); ?>
							</a>
							
							<a href="mailto:<?php echo carbon_get_theme_option( 'email' ); ?>" class="contacts-sec__mail">
								<svg>
									<use xlink:href="#mail"></use>
								</svg>
								<?php echo carbon_get_theme_option( 'email' ); ?>
							</a>
							<div class="contacts-sec__address">
								<svg>
									<use xlink:href="#map"></use>
								</svg>
								<?php echo carbon_get_theme_option( 'adress' ); ?>
							</div>
						</div>

						<form action="#" class="contacts-sec__form">
							<div class="form__line">
								<input id="all_sf_name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Имя" class="input">
								<input id="all_sf_tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Телефон" class="input">
								<button id="all_b_send" class="form__btn btn">Отправить</button>
							</div>
							<p class="contacts-sec__form-policy">* Отправляя заявку, вы соглашаетесь на обработку
								<a href="#">персональных данных</a>
							</p>
						</form>

					</div>

				</div>
			</section>