<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Painter_Yuriy_Anurin
 */

get_header();
?>

<main class="main main__content">
      <section class="main__container page-404">
        <h1 class="headline page-404__headline">Ошибка 404</h1>
        <p class="page-404__paragraph paragraph">
          К сожалению такой страницы нет. Пожалуйста проверьте адрес страницы. Перейти на&nbsp;<a href="<?php echo home_url('/') ?>">главную</a>.
        </p>
      </section>
	  <section class="main__section contacts" id="contacts">
        <h2 class="contacts__headline headline">
          Контакты
        </h2>
        <p class="contacts__desc paragraph">
          Перед началом работ просим связаться с художником одним из удобных для вас способов для уточнения деталей по заказу:
        </p>
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
        <?php echo do_shortcode('[contact-form-7 id="8" title="contact-form" html_class="contacts__form form" html_id="contact-form"]'); ?>
        <div class="contacts__images">
          <picture class="contacts__picture">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii@2x.jpg 2x">
            <img class="contacts__image" width="368" height="490" src="<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii.jpg" alt="&#34;Введение во храм Пресвятой Богородицы&#34; роспись храма выполнена в стиле &#34;академическая живопись&#34;. Данная композиция раскрывает исключительное место в христианской иконографии, свидетельствуя о значении Пресвятой Богородицы в жизни Церкви. Почитание Богородицы основывается на догмате о Боговоплощение. Создание академической живописи - это трудоемкий процесс с большим количеством этапов. Работа начинается с рисунка, художник создает композиционное равновесие в заданном формате, с помощью изображения фигур и интерьерных элементов, с помощью живописного &#34;подмалевка&#34; в виде краски охристых оттенков." loading="lazy"/>
          </picture>
        </div>
      </section>
    </main>

<?php
get_footer();