const Method = {
    GET: 'GET',
    PUT: 'PUT',
};

const END_POINT = '/wp-json/wp/v2';

const PORTFOLIO_MODAL = '#portfolio-modal';
const PORTFOLIO_CONTENT = '#modal-portfolio-content';
const PORTFOLIO_CONTAINER = '#portfolio-sliders';

const swiperSettingsPortfolio = {
	init: true,
	keyboard: {
		enabled: true,
	},
	lazy: true,
	pagination: {
		el: '.modal-portfolio__progressbar',
		type: 'progressbar',
		progressbarFillClass: 'modal-portfolio__progressbar-fill',
	},
	navigation: {
		nextEl: '.modal__button-pagination--next',
		prevEl: '.modal__button-pagination--prev',
	},
	hashNavigation: {
		watchState: true,
	},
	zoom: true,
	effect: 'coverflow',
    coverflowEffect: {
        rotate: 30,
        slideShadows: true,
    },
	loop: true,
	autoplay: {
	  delay: 5000,
	  disableOnInteraction: true,
	},
};

export {END_POINT, Method, PORTFOLIO_CONTAINER, PORTFOLIO_CONTENT, PORTFOLIO_MODAL, swiperSettingsPortfolio};

