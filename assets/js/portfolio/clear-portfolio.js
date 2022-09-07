import { PORTFOLIO_MODAL } from '../const.js';

export const clearPortfolio = () => {
    const portfolio = document.querySelector(PORTFOLIO_MODAL);
    portfolio.innerHTML = '';
};