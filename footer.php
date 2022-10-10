<footer class="footer">
	<a <?php if (!is_home()) : ?> href="<?php echo home_url('/') ?>" <?php endif; ?> class="footer__logo logo-footer">
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
	if (has_nav_menu('menu_footer')) {
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
	};
	?>
	<div class="footer__copyright">
		&#169; Ю. E. Анурин, <?php echo date_i18n('Y'); ?>
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
		<?php echo do_shortcode('[contact-form-7 id="73" title="contact-form" html_class="contacts__form form" html_id="contact-form-modal"]'); ?>
	</div>
</div>
<div class="modal modal-portfolio" id="portfolio-modal">
</div>
<?php wp_footer(); ?>
<template id="template-portfolio-item">
	<div class="swiper-slide">
		<figure class="modal-portfolio__figure">
			<picture>
				<img class="modal-portfolio__image swiper-lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/blank.png" width="0" height="0" data-src="" alt="" />
			</picture>
			<figcaption class="modal-portfolio__container-text">
				<div class="modal-portfolio__text">
				</div>
			</figcaption>
		</figure>
	</div>
</template>
<template id="template-portfolio-modal">
	<div class="modal-portfolio__content" id="modal-portfolio-content">
		<button class="modal__close-button modal-portfolio__close-button" type="button">
			<span class="visually-hidden">
				Закрыть
			</span>
		</button>
		<div class="swiper mySwiper">
			<div class="swiper-wrapper" id="portfolio-sliders">
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
		<div class="modal-portfolio__loader"></div>
	</div>

</template>
</body>

</html>