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
							<a href="tel:88004563344" class="contacts-sec__tel">
								<svg>
									<use xlink:href="#phone"></use>
								</svg>
								8 800 456 33 44</a>
							<a href="#callback" class="contacts-sec__callback _popup-link">Заказать звонок</a>
							<a href="mailto:vistrel-kursk@yandex.ru" class="contacts-sec__mail">
								<svg>
									<use xlink:href="#mail"></use>
								</svg>
								vistrel-kursk@yandex.ru</a>
							<div class="contacts-sec__address">
								<svg>
									<use xlink:href="#map"></use>
								</svg>
								Курск, ул. Радищева 64
							</div>
						</div>

						<form action="#" class="contacts-sec__form">
							<div class="form__line">
								<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Имя" class="input _req">
								<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Телефон" class="input _phone _req">
								<button class="form__btn btn">Отправить</button>
							</div>
							<p class="contacts-sec__form-policy">* Отправляя заявку, вы соглашаетесь на обработку
								<a href="#">персональных данных</a>
							</p>
						</form>

					</div>

				</div>
			</section>