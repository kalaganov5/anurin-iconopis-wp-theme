import Swiper from './swiper.js';
import { END_POINT, swiperSettingsPortfolio } from '../const.js';
import PortfolioApi from './portfolio-api.js';
import { showModal } from '../modal.js';
import { clearPortfolio } from './clear-portfolio.js';

/**
 * Обработчик слайдера портфолио
 */
const portfolioHandler = () => {
	const portfolioClassName = 'modal-portfolio';
  const portfolioButtonsSelector = '.works__link';
  const portfolioButtons = document.querySelectorAll( portfolioButtonsSelector );

	portfolioButtons.forEach( ( portfolioButton ) => {
		portfolioButton.addEventListener( 'click', async ( evt ) => {    
			evt.preventDefault();
      
      const categoryId = portfolioButton.dataset.category;
      await new PortfolioApi(END_POINT, categoryId).portfolio;
      const portfolioSlider = new Swiper( '.mySwiper', swiperSettingsPortfolio);

			showModal( portfolioClassName );
      const closeButtonHandler = document.querySelector( '.modal-portfolio__close-button' );
      console.log(closeButtonHandler)
      const toggleTextButton = document.querySelector( '.modal-portfolio__toggle-text' );

      toggleTextButton.addEventListener( 'click', ( evt ) => {
        evt.preventDefault();
        console.log( 'показ текста, срабатывание' );
        textShowPortfolio();
      });
    
      /**
       *
       * @param {boolean} isClose признак, нужно ли закрыть текст
       * @return
       */
      const textShowPortfolio = ( isClose = false ) => {
        const currentSlider = portfolioSlider.el.querySelector( '.swiper-slide-active' );
        const textElement = currentSlider.querySelector( '.modal-portfolio__text' );
        // проходимся и находим открытые текст
        const oldTextElement = portfolioSlider.el.querySelector( '.modal-portfolio__text--show' );
        console.log( toggleTextButton );
    
        if ( isClose ) {
          console.log( oldTextElement );
          try {
            textElement.classList.remove( 'modal-portfolio__text--show' );
            toggleTextButton.classList.remove( 'modal-portfolio__toggle-text--show' );
          } catch ( error ) {
            console.log( 'removing unsuccessful' );
          }
          return;
        }
    
        textElement.classList.toggle( 'modal-portfolio__text--show' );
        toggleTextButton.classList.toggle( 'modal-portfolio__toggle-text--show' );
      };

      portfolioSlider.on( 'slideChange', function() {
        textShowPortfolio( true );
      } );

      const destroyPortfolio = ( evt ) => {
        evt.preventDefault();
        portfolioSlider.destroy();
        clearPortfolio();
        document.removeEventListener('keydown', closePortfolioIsEsc);
      }

      const closePortfolioIsEsc = function (evt) {
        if (evt.key === 'Esc' || evt.key === 'Escape') {
          evt.preventDefault();
          destroyPortfolio( evt );
        }
      }
      document.addEventListener('keydown', closePortfolioIsEsc);
      closeButtonHandler.addEventListener( 'click', destroyPortfolio);
		} );
	} );
};

export { portfolioHandler };
