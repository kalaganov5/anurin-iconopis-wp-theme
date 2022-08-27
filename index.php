<?php get_header(); ?>
    <main class="main">
      <section class="main__section hello-screen">
        <h1 class="hello-screen__headline">
          Художник-иконописец Юрий Анурин
          <span class="visually-hidden">|</span>
          <span class="hello-screen__headline--desc">
            Написание и&nbsp;реставрация икон, роспись храмов и&nbsp;церквей
          </span>
        </h1>
        <p class="hello-screen__subtitle">
          Работаю по&nbsp;всей России и&nbsp;за&nbsp;рубежом
        </p>
        <a href="#contacts" class="hello-screen__button button" data-contact="screen-main">Связаться с&nbsp;художником</a>
      </section>
      <section class="main__section portfolio" id="portfolio">
        <h2 class="headline portfolio__headline">
          Портфолио
        </h2>
        <p class="paragraph portfolio__text">
          В портфолио представлены работы по&nbsp;написанию икон, росписи храмов и&nbsp;церквей, реставрации икон, картины на&nbsp;церковно-историческую тематику.
        </p>
        <p class="paragraph portfolio__text">
          Любой заказ разбирался индивидуально, исходя из&nbsp;особенностей материалов и&nbsp;архитектуры храма. За каждой из&nbsp;работ стоит история и&nbsp;я&nbsp;рад показать результат, который у&nbsp;меня получился.
        </p>
        <ul class="portfolio__cards works">
          <li class="works__item">
            <a href="<?php echo get_category_link(8); ?>" data-category="8" class="works__link">
              <picture class="works__pictures">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov-i-cerkvei.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov-i-cerkvei@2x.jpg 2x">
                <img class="works__image" src="<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov-i-cerkvei.jpg" width="269" height="162" alt="Роспись в церкви Феодоровской иконы Божией Матери, город Ковров. Изображение пророков отличается закономерной последовательностью иконописных образов. Роспись внутри храма выполнена с применением акриловой и масляной краски." loading="lazy">
              </picture>
              <p class="works__title">
                Роспись храмов и&nbsp;церквей
              </p>
              <p class="works__pseudo-link">
                Смотреть работы
              </p>
            </a>
          </li>
          <li class="works__item">
            <a href="<?php echo get_category_link(7); ?>" data-category="7" class="works__link">
              <picture class="works__pictures">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/usluga-napisanie-ikon.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/usluga-napisanie-ikon@2x.jpg 2x">
                <img class="works__image" src="<?php echo get_template_directory_uri() ?>/assets/img/usluga-napisanie-ikon.jpg" width="269" height="162" alt="Икона &#34;Спас в Силах&#34; написана в академическом стиле живописи. Этапы написания иконы, в авторском исполнении, требуют разработки большого количества эскизов. Русская иконопись имеет много примеров изображения иконы &#34;Спас в Силах&#34;." loading="lazy">
              </picture>
              <p class="works__title">
                Написание икон
              </p>
              <p class="works__pseudo-link">
                Смотреть работы
              </p>
            </a>
          </li>
          <li class="works__item">
            <a href="<?php echo get_category_link(9); ?>" data-category="9" class="works__link">
              <picture class="works__pictures">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/usluga-resvraciya-icon.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/usluga-resvraciya-icon@2x.jpg 2x">
                <img class="works__image" src="<?php echo get_template_directory_uri() ?>/assets/img/usluga-resvraciya-icon.jpg" width="269" height="162" alt="Отрестоврированная икона Юрием Ануриным. Пример до и после." loading="lazy">
              </picture>
              <p class="works__title">
                Реставрация икон и&nbsp;церковной живописи
              </p>
              <p class="works__pseudo-link">
                Смотреть работы
              </p>
            </a>
          </li>
          <li class="works__item">
            <a href="<?php echo get_category_link(10); ?>" data-category="10" class="works__link">
              <picture class="works__pictures">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/usluga-pravoslavnay-jivopis-na-holste.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/usluga-pravoslavnay-jivopis-na-holste@2x.jpg 2x">
                <img class="works__image" src="<?php echo get_template_directory_uri() ?>/assets/img/usluga-pravoslavnay-jivopis-na-holste.jpg" width="269" height="162" alt="Икона &#34;Вознесение Господне&#34; написана на доске, порода дерева липа, в академическом стиле, масляная живопись. Икона выполнена для праздничного ряда иконостаса." loading="lazy">
              </picture>
              <p class="works__title">
                Православная живопись на&nbsp;холсте
              </p>
              <p class="works__pseudo-link">
                Смотреть работы
              </p>
            </a>
          </li>
        </ul>
      </section>
      <section class="main__section about" id="about">
        <h2 class="about__headline headline">
          Об авторе
        </h2>
        <p class="about__subtitle">
          Юрий Анурин – художник-иконописец, реставратор.
        </p>
        <p class="about__subtitle about__subtitle--bottom">
          Занимаюсь написанием и реставрацией икон, росписью храмов и&nbsp;церквей, церковной живописью на&nbsp;холсте.
        </p>
        <ul class="about__descriptions biography">
          <li class="biography__item">
            <h3 class="biography__head">
              Истоки
            </h3>
            <p class="paragraph biography__body">
              Родился в&nbsp;древнем городе Муроме, который славится православной историей и&nbsp;храмами.
            </p>
            <p class="biography__body paragraph">
              Мои прапрадеды были иконописцами, поэтому с&nbsp;раннего детства мне было интересно познавать изобразительное искусство.
            </p>
          </li>
          <li class="biography__item">
            <h3 class="biography__head">
              Учёба
            </h3>
            <p class="biography__body paragraph">
              Сразу после обучения в&nbsp;художественной школе я&nbsp;решил получить высшее художественное образование и&nbsp;в&nbsp;2008 году поехал учиться осваивать навыки росписи храмов и&nbsp;написания икон во&nbsp;Владимирский государственный университет имени Столетовых.
            </p>
            <p class="biography__body paragraph">
              В 2014 году закончил с&nbsp;отличием магистратуру по&nbsp;специальности &laquo;Реставрация станковой темперной и&nbsp;масляной живописи&raquo;.
            </p>
          </li>
          <li class="biography__item">
            <h3 class="biography__head">
              Выставки
            </h3>
            <p class="biography__body paragraph">
              Ежегодно участвую во&nbsp;всероссийских выставках творческого направления и&nbsp;работаю над проектами по&nbsp;росписи православных храмов.
            </p>
          </li>
          <li class="biography__item">
            <h3 class="biography__head">
              Принципы
            </h3>
            <p class="biography__body paragraph">
              За 14 лет работы над&nbsp;написанием икон и&nbsp;росписью храмов понял, что&nbsp;церковное искусство открывается через познание православной веры и&nbsp;нужно почувствоваться молитвенный настрой перед тем,&nbsp;как&nbsp;приступить к&nbsp;написанию иконы.
            </p>
          </li>
        </ul>
      </section>
      <section class="main__section offer" id="services">
        <h2 class="offer__headline headline">
          Услуги автора
        </h2>
        <ul class="offer__list services">
          <li class="services__item">
            <article class="services__content service">
              <h3 class="service__headline headline">
                Написание икон
              </h3>
              <ul class="service__gallery">
              <li class="service__gallery-item">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon@2x.jpg 2x">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon.jpg" alt="&#34;Иерусалимская икон Божией Матери&#34;, написана в стиле академическая живопись для Покровско-Всехсвятского храма города Алматы. Икона написана в технике масляная живопись, живописная имитация металлического оклада. Список иконы выполнен с изображения оригинальной иконы находящейся в храме Успения Пресвятой Богородицы в Иерусалиме. Размер иконы 85 х120 см." width="107" height="153" class="service__gallery-image" loading="lazy">
                </picture>
              </li>
              <li class="service__gallery-item">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-man.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-man@2x.jpg 2x">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-man.jpg" alt="Икона &#34;Святой Севастьян Карагандинский&#34; выполнена в технике масляная живопись. Фон иконы покрыт сусальным золотом. Доска под икону выполнена с ковчегом. Икона написана для Екатеринбургской епархии." width="121" height="153" class="service__gallery-image" loading="lazy">
                </picture>
              </li>
              <li class="service__gallery-item">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-3.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-3@2x.jpg 2x">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/napisanie-icon-3.jpg" alt="&#34;Порт-Артурская икона Божией Матери&#34;. Стиль написания иконы - академическая живопись. Данная икона, представленная на фотографии, была написана на основе оригинальной иконы, чудотворного образа Богородицы. Характерный вид иконы задает резьба по левкасу, выполненная в ручную, а затем покрыта сусальным золотом и прописана цветной эмалью. Русский художник иконописец, в 1904 году, впервые написал образ Порт-Артурской иконы Божией Матери." width="281" height="516" class="service__gallery-image" loading="lazy">
                </picture>
              </li>
              </ul>
              <p class="service__desc paragraph">
                Написание иконы требует кропотливого и&nbsp;качественного подхода. Во&nbsp;время работы начиная с&nbsp;выбора деревянной основы до&nbsp;создания рисунка художник соблюдает технологические, канонические и&nbsp;иконографические правила.
              </p>
              <h4 class="visually-hidden">
                Стили написания икон:
              </h4>
              <p class="service__desc paragraph">
                Художник выполняет написание икон в&nbsp;каноническом, византийском и&nbsp;академическом стиле.
              </p>
              <h4 class="service__headline paragraph">
                Варианты икон:
              </h4>
              <ul class="service__icon-types icon-types">
                <li class="icon-types__item">
                  Мерные иконы на&nbsp;крестины
                </li>
                <li class="icon-types__item">
                  Свадебные и&nbsp;венчальные иконы
                </li>
                <li class="icon-types__item">
                  Семейные иконы
                </li>
                <li class="icon-types__item">
                  Именные иконы
                </li>
                <li class="icon-types__item">
                  Написание иконостасных икон
                </li>
              </ul>
              <p class="service__note paragraph">
                Сроки написания икон рассчитываются исходя из&nbsp;размера доски, занятости иконописца, сложности выбранного образа и&nbsp;композиционного решения.
              </p>
              <a href="#contacts" class="service__button button" data-contact="screen-service--napisanie-icon">Связаться с&nbsp;художником</a>
            </article>
          </li>
          <li class="services__item">
            <article class="services__content service service--col7x3">
              <h3 class="service__headline headline">
                Роспись храмов и&nbsp;церквей
              </h3>
              <ul class="service__gallery">
                <li class="service__gallery-item">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov-pc.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov-pc@2x.jpg 2x" media="(min-width: 1200px)">
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov@2x.jpg 2x">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rospis-hramov.jpg" alt="Требуется роспись храма? Иконописная мастерская Юрия Анурина выполняет роспись храма, церковно-историческая живопись, реставрация икон, портрет священнослужителя." width="270" height="201" class="service__gallery-image" loading="lazy">
                  </picture>
                </li>
              </ul>
              <p class="service__desc paragraph">
                Чтобы узнать историю церкви и&nbsp;житие святых, нужно посмотреть внутреннюю роспись храма. Ведь перед началом работ художник создает эскиз росписи храма, предварительно изучив особенности стиля, архитектуры и&nbsp;времени постройки храма.
              </p>
              <h4 class="service__headline service__headline--paragraph paragraph">
                Варианты внутренней росписи храмов:
              </h4>
              <dl class="service__dl">
                <dt class="service__dt">Роспись в&nbsp;академическом стиле</dt>
                <dd class="service__dd">основной акцент на&nbsp;соблюдении канонов классицистической-реалистической живописи</dd>
                <dt class="service__dt">Роспись в&nbsp;каноническом стиле</dt>
                <dd class="service__dd">основной акцент в&nbsp;наборе традиционных выразительных средств иконописного изображения, присущие  иконописному направлению</dd>
                <dt class="service__dt">Роспись в&nbsp;византийском стиле</dt>
                <dd class="service__dd">основной акцент делается на&nbsp;выражении церковного богословия в&nbsp;живописном исполнении</dd>
                <dt class="service__dt">Роспись в&nbsp;авторском стиле</dt>
                <dd class="service__dd">основной акцент делается на&nbsp;создании авторских иконописных образов и&nbsp;композиционных решений</dd>
              </dl>
              <p class="service__desc paragraph">
                Стилистические особенности живописной росписи сформировалась по&nbsp;принципу изображения: евхаристическая роспись, иерархическая роспись, литургическая роспись, историческая роспись.
              </p>
              <p class="service__desc paragraph">
                Иконописная мастерская делает позолотные работы поталью и&nbsp;сусальным золотом.
              </p>
              <a href="#contacts" class="service__button button" data-contact="screen-service--rospis-hramov-cerkvei">Связаться с&nbsp;художником</a>
            </article>
          </li>
          <li class="services__item">
            <article class="services__content service service--col7x3">
              <h3 class="service__headline headline">
                Реставрация икон и&nbsp;монументальной живописи
              </h3>
              <ul class="service__gallery">
              <li class="service__gallery-item">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-before.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-before@2x.jpg 2x">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-before.jpg" alt="Фотография до начала работ. Реставрация иконы &#34;Св. Преподобный Серафим Саровский&#34; выполнена для Нижегородской епархии. Выполнены реставрационные процессы, которые вернули первоначальный вид произведению. Иконописная мастерская реставрирует храмовые, церковные иконы, а так же производиться реставрация домашних икон." width="136" height="176" class="service__gallery-image" loading="lazy">
                </picture>
              </li>
              <li class="service__gallery-item">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-after.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-after@2x.jpg 2x">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/restavraciya-icon-i-jivopis-after.jpg" alt="Фотография после работ. Реставрация иконы &#34;Св. Преподобный Серафим Саровский&#34; выполнена для Нижегородской епархии. Выполнены реставрационные процессы, которые вернули первоначальный вид произведению. Иконописная мастерская реставрирует храмовые, церковные иконы, а так же производиться реставрация домашних икон." width="136" height="176" class="service__gallery-image" loading="lazy">
                </picture>
              </li>
              </ul>
              <p class="service__desc paragraph">
                Издревле иконы ставили на&nbsp;почетное место в&nbsp;доме. Но&nbsp;с&nbsp;годами иконы теряют первоначальный вид, покровный слой темнеет и&nbsp;произведение меняются до&nbsp;неузнаваемости.
              </p>
              <h4 class="service__headline paragraph">
                Как проходит работа по&nbsp;реставрации икон:
              </h4>
              <p class="service__desc paragraph">
                Реставрация старинных икон и&nbsp;церковной живописи в&nbsp;нашей мастерской проходит по&nbsp;технологии разработанной в&nbsp;<abbr title="Государственный научно-исследовательский институт реставрации">ГосНИИР</abbr>. Перед началом работ художник-реставратор проводит изучение произведения, дает заключение в&nbsp;каком аварийном состоянии икона поступила на&nbsp;реставрацию. После проведения целого ряда реставрационных процессов икона покрывается защитным слоем лака.
              </p>
              <p class="service__desc paragraph">
                Художник предоставляет реставрационный паспорт по&nbsp;желанию заказчика за&nbsp;дополнительную стоимость.
              </p>
              <h4 class="service__headline paragraph">
                Какие иконы мы&nbsp;реставрируем:
              </h4>
              <ul class="service__icon-types icon-types">
                <li class="icon-types__item">
                  Домашние аналойные иконы
                </li>
                <li class="icon-types__item">
                  Мерные иконы на&nbsp;крестины
                </li>
                <li class="icon-types__item">
                  Свадебные и&nbsp;венчальные иконы
                </li>
                <li class="icon-types__item">
                  Семейные иконы
                </li>
                <li class="icon-types__item">
                  Именные иконы
                </li>
                <li class="icon-types__item">
                  Иконостасные иконы
                </li>
              </ul>
              <p class="service__note paragraph">
                Перед началом реставрационных работы отправляйте реставратору фотографию произведения для&nbsp;предварительного заключения аварийного состояния и&nbsp;оценки стоимости работ.
              </p>
              <p class="service__desc paragraph">
                Художник делает реставрацию икон по&nbsp;всей&nbsp;России и&nbsp;за&nbsp;рубежом.
              </p>
              <a href="#contacts" class="service__button button" data-contact="screen-service--restavracia-icon">Связаться с&nbsp;художником</a>
            </article>
          </li>
          <li class="services__item">
            <article class="services__content service service--col7x3">
              <h3 class="service__headline headline">
                Православная живопись на&nbsp;холсте
              </h3>
              <ul class="service__gallery">
                <li class="service__gallery-item">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/cerkovno-istoricheskaya-zhivopis-rozhdestvo-hristovo.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/cerkovno-istoricheskaya-zhivopis-rozhdestvo-hristovo@2x.jpg 2x">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cerkovno-istoricheskaya-zhivopis-rozhdestvo-hristovo.jpg" alt="Церковно-историческая живопись &#34;Рождество Христово&#34; выполнено по заказу Московской епархии. Художники жанровой живописи часто работают над созданием картин на религиозную тематику." width="214" height="286" class="service__gallery-image" loading="lazy">
                  </picture>
                </li>
              </ul>
              <p class="service__desc paragraph">
                Любимое место в&nbsp;мастерской занимают картины на&nbsp;церковно-историческую тематику.
              </p>
              <p class="service__note paragraph">
                В&nbsp;них художник раскрывает библейские сюжеты, показывает календарную логику событий и&nbsp;повести прошедших лет.
              </p>
              <p class="service__desc paragraph">
                Возможно заказать написание портрета священнослужителя.
              </p>
              <p class="service__desc paragraph">
                Доставка картин и&nbsp;портретов по&nbsp;всей&nbsp;России и&nbsp;за&nbsp;рубеж.
              </p>
              <a href="#contacts" class="service__button button" data-contact="screen-service--pravoslavnay-jivopis">Связаться с&nbsp;художником</a>
            </article>
          </li>
        </ul>
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
        <?php echo do_shortcode('[contact-form-7 id="22" title="contact-form" html_class="contacts__form form" html_id="contact-form"]'); ?>
        <div class="contacts__images">
          <picture class="contacts__picture">
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii.jpg 1x,<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii@2x.jpg 2x">
            <img class="contacts__image" width="368" height="490" src="<?php echo get_template_directory_uri() ?>/assets/img/anurin-yurii.jpg" alt="&#34;Введение во храм Пресвятой Богородицы&#34; роспись храма выполнена в стиле &#34;академическая живопись&#34;. Данная композиция раскрывает исключительное место в христианской иконографии, свидетельствуя о значении Пресвятой Богородицы в жизни Церкви. Почитание Богородицы основывается на догмате о Боговоплощение. Создание академической живописи - это трудоемкий процесс с большим количеством этапов. Работа начинается с рисунка, художник создает композиционное равновесие в заданном формате, с помощью изображения фигур и интерьерных элементов, с помощью живописного &#34;подмалевка&#34; в виде краски охристых оттенков." loading="lazy"/>
          </picture>
        </div>
      </section>
    </main>
<?php get_footer(); ?>