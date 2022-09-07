import { PORTFOLIO_MODAL } from "../const.js";

export const renderPortfolio = (portfolioData) => {
    const portfolioItemTemplate = document.querySelector('#template-portfolio-item').content;
    const portfolioTemplateModal = document.querySelector('#template-portfolio-modal').content.cloneNode(true);

    const portfolioModal = document.querySelector(PORTFOLIO_MODAL);
    const fragmentPortfolioModal = document.createDocumentFragment();
    fragmentPortfolioModal.appendChild(portfolioTemplateModal);
    const fragmentPortfolioSlides = document.createDocumentFragment();
    portfolioModal.appendChild(fragmentPortfolioModal);
    const portfolioBlock = document.querySelector('#portfolio-sliders');
    
    

    portfolioData.forEach((item) => {
        const imageSrc = item._embedded["wp:featuredmedia"][0].source_url;
        const portfolioItem = portfolioItemTemplate.cloneNode(true);

        const image = portfolioItem.querySelector('.modal-portfolio__image');
        image.dataset.src = imageSrc;
        image.alt = item.title.rendered;

        const workText = portfolioItem.querySelector('.modal-portfolio__text');
        workText.innerHTML = item.content.rendered;

        fragmentPortfolioSlides.appendChild(portfolioItem);
    });

    portfolioBlock.appendChild(fragmentPortfolioSlides);
};