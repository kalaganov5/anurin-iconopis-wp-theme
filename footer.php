<footer class="footer">
	<a
	<?php if ( !is_home() ) : ?>
		href="<?php echo home_url('/') ?>"
	<?php endif; ?> 
	class="footer__logo logo-footer">
		<svg role="img" class="logo-footer__image" width="28" height="36">
			<text class="visually-hidden" font-size="0">Иконописная мастерская Юрия Анурина.</text>
			<use xlink:href="#icon-logo-church"></use>
		</svg>
		<svg role="img" class="logo-footer__image logo-footer__image--pc" width="279" height="50">
			<text class="visually-hidden" font-size="0">Иконописная мастерская Юрия Анурина.</text>
			<use xlink:href="#icon-logo-anurin-Iconopis"></use>
		</svg>
	</a>
	<ul class="footer__socials socials socials--footer">
		<li class="socials__item">
			<a class="socials__link" target="_blank" href="https://vk.com/iconopisno" title="Моя страница ВКонтакте">
				<svg class="socials__icon socials__icon--vk" width="30" height="30">
					<use xlink:href="#icon-vk"></use>
				</svg>
			</a>
		</li>
		<li class="socials__item">
			<a class="socials__link" target="_blank" href="https://pinterest.com/yurianurin/" title="Моя страница Pinterest">
				<svg class="socials__icon" width="30" height="30">
					<use xlink:href="#icon-pinterest"></use>
				</svg>
			</a>
		</li>
		<li class="socials__item">
			<a class="socials__link" target="_blank" href="https://www.instagram.com/yuri_anurin/" title="Моя страница в Instagram">
				<svg class="socials__icon" width="30" height="30">
					<use xlink:href="#icon-instagram"></use>
				</svg>
			</a>
		</li>
		<li class="socials__item">
			<a class="socials__link" target="_blank" href="https://www.facebook.com/profile.php?id=100009448273366" title="Моя страница в Facebook">
				<svg class="socials__icon" width="30" height="30">
					<use xlink:href="#icon-facebook"></use>
				</svg>
			</a>
		</li>
	</ul>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu_footer',
			'container' => false,
			'menu_class' => 'footer__link links-footer',
			'menu_id' => 'footer-menu',
			'depth' => 1,
			'walker' => new Anurin_iconopis_menu_footer(),
		),
	);
	?>
	<div class="footer__copyright">
		&#169; Ю. E. Анурин, <?php echo date_i18n ('Y'); ?>
	</div>
</footer>
<div class="modal modal-success">
	<div class="modal-success__content modal__content">
		<button class="modal-success__close-button modal__close-button" type="button">
			<span class="visually-hidden">
				Закрыть
			</span>
		</button>
		<p class="modal-success__text">
			Спасибо!
		</p>
		<p class="modal-success__text">
			Ваша заявка отправлена, скоро с&nbsp;вами свяжусь
		</p>
		<div class="modal-success__check-mark">
			<svg class="modal-success__image" width="29" height="19">
				<use xlink:href="#icon-check-mark"></use>
			</svg>
		</div>
	</div>
</div>
<div class="modal modal-form modal--mobile-full">
	<div class="modal__content">
		<button class="modal__close-button" type="button">
			<span class="visually-hidden">
				Закрыть
			</span>
		</button>
		<a href="tel:+79045914599" class="contacts__link">8 904 591-45-99</a>
		<a href="mailto:iconopis-moscow@mail.ru" class="contacts__link">iconopis-moscow@mail.ru</a>
		<ul class="contacts__socials socials">
			<li class="socials__item">
				<a class="socials__link" target="_blank" href="https://vk.me/artistprofi" title="Связаться через ВКонтакте">
					<svg class="socials__icon socials__icon--vk" width="40" height="40">
						<use xlink:href="#icon-vk"></use>
					</svg>
				</a>
			</li>
			<li class="socials__item">
				<a class="socials__link" target="_blank" href="https://wa.me/79045914599" title="Связаться через WhatsApp">
					<svg class="socials__icon" width="40" height="40">
						<use xlink:href="#icon-whatsapp"></use>
					</svg>
				</a>
			</li>
			<li class="socials__item">
				<a class="socials__link" target="_blank" href="viber://chat?number=%2B79045914599" title="Связаться через Viber">
					<svg class="socials__icon" width="40" height="40">
						<use xlink:href="#icon-viber"></use>
					</svg>
				</a>
			</li>
			<li class="socials__item">
				<a class="socials__link" target="_blank" href="https://t.me/+79045914599" title="Связаться через Telegram">
					<svg class="socials__icon" width="40" height="40">
						<use xlink:href="#icon-telegram"></use>
					</svg>
				</a>
			</li>
		</ul>
		<form class="contacts__form form" id="contact-form-modal" action="/" method="post">
			<label class="form__label" for="user-name--modal">
				Имя
			</label>
			<input class="form__input" type="text" id="user-name--modal" />
			<label class="form__label" for="user-phone--modal">
				Телефон <span class="form__text-muted">(обязательно)</span>
			</label>
			<input class="form__input" type="tel" id="user-phone--modal" placeholder="8 (999) 000-00-00" data-tel-input maxlength="18" required />
			<span class="form__validation-note">Необходимо заполнить поле</span>
			<label class="form__label" for="comments--modal">
				Комментарий
			</label>
			<textarea class="form__comments" name="comments" id="comments--modal" cols="30" rows="2"></textarea>
			<p class="form__text">Заполняя форму, я соглашаюсь с&nbsp;<a class="form__link" target="_blank" href="/privacy-policy">политикой конфиденциальности</a></p>
			<button class="form__submit button" id="submit-button--modal" type="submit">Отправить</button>
		</form>
	</div>
</div>
<div class="modal modal-portfolio">
	<div class="modal-portfolio__content">
		<button class="modal__close-button modal-portfolio__close-button" type="button">
			<span class="visually-hidden">
				Закрыть
			</span>
		</button>
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-hash="portfolio-1">
					<figure class="modal-portfolio__figure">
						<picture>
							<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/1.jpg" alt="" />
						</picture>
						<figcaption class="modal-portfolio__container-text">
							<div class="modal-portfolio__text">
								Пример описания работы. Описание в разработке.
							</div>
						</figcaption>
					</figure>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<div class="swiper-slide" data-hash="portfolio-2">
					<figure class="modal-portfolio__figure">
						<picture>
							<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/2.jpg" alt="" />
						</picture>
						<figcaption class="modal-portfolio__container-text">
							<div class="modal-portfolio__text">
								&#171;Порт-Артурская икона Божией Матери&#187;. Стиль написания иконы -академическая живопись. Данная икона, представленная на&#160;фотографии, была написана на&#160;основе оригинальной иконы, чудотворного образа Богородицы. Характерный вид иконы задает резьба по&#160;левкасу, выполненная в&#160;ручную, а&#160;затем покрыта сусальным золотом и&#160;прописана цветной эмалью. Русский художник иконописец, в&#160;1904&#160;году, впервые написал образ Порт-Артурской иконы Божией Матери. Реставрация иконы &#171;Св. Преподобный Серафим Саровский&#187; выполнена для Нижегородской епархии. Выполненны реставрационные процессы, которые вернули первоначальный вид произведению. Иконописная мастерская реставрирует храмовые, церковные иконы, а&#160;так&#160;же производиться реставрация домашних икон.
							</div>
						</figcaption>
					</figure>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<div class="swiper-slide" data-hash="portfolio-3">
					<figure class="modal-portfolio__figure">
						<picture>
							<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/3.jpg" alt="" />
						</picture>
						<figcaption class="modal-portfolio__container-text">
							<div class="modal-portfolio__text">
								Пример описания работы. Описание в разработке.
							</div>
						</figcaption>
					</figure>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<div class="swiper-slide" data-hash="portfolio-4">
					<figure class="modal-portfolio__figure">
						<picture>
							<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/4.jpg" alt="" />
						</picture>
						<figcaption class="modal-portfolio__container-text">
							<div class="modal-portfolio__text">
								Пример описания работы. Описание в разработке.
							</div>
						</figcaption>
					</figure>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<div class="swiper-slide" data-hash="portfolio-5">
					<figure class="modal-portfolio__figure">
						<picture>
							<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/5.jpg" alt="" />
						</picture>
						<figcaption class="modal-portfolio__container-text">
							<div class="modal-portfolio__text">
								Пример описания работы. Описание в разработке.
							</div>
						</figcaption>
					</figure>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
			</div>
			<button class="modal__button-pagination modal__button-pagination--prev" type="button">
				<span class="visually-hidden">
					Предыдущий слайд
				</span>
			</button>
			<button class="modal__button-pagination modal__button-pagination--next" type="button">
				<span class="visually-hidden">
					Следующий слайд
				</span>
			</button>
			<div class="modal-portfolio__progressbar"></div>
		</div>
		<div class="modal-portfolio__control">
			<button class="modal-portfolio__toggle-text" type="button">
				<span class="modal-portfolio__toggle-text-showed">Показать описание</span>
				<span class="modal-portfolio__toggle-text-hide">Скрыть описание</span>
			</button>
			<p class="modal-portfolio__contact">
				Тел.: <a href="tel:+79045914599" class="modal-portfolio__contact-link contacts__link">8 904 591-45-99</a>
			</p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
