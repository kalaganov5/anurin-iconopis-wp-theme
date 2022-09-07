import { renderPortfolio } from './render-portfolio.js';
import { Method } from '../const.js';

export default class PortfolioApi {
    #endPoint = null;
    #idCategory = null;

    constructor(endPoint, idCategory) {
        this.#endPoint = endPoint;
        this.#idCategory = idCategory;
    }

    get portfolio() {
        return this.#load({ url: 'portfolio' })
            .then(PortfolioApi.parseResponse)
            .then((postData) => {
                renderPortfolio(postData);
            });
    }

    #load = async ({
        url,
        method = Method.GET,
        body = null,
        headers = new Headers(),
    }) => {
        const response = await fetch(
            `${this.#endPoint}/${url}?categories=${this.#idCategory}&_embed`,
            { method, body, headers },
        );

        try {
            PortfolioApi.checkStatus(response);
            try {
                dataLayer.push({ 'event': 'portFolioShowSuccess' });
            } catch (err) {
                console.error('Google Tag Manager is not loaded');
            }
            return response;
        } catch (err) {
            try {
                dataLayer.push({ 'event': 'portFolioShowError' });
            } catch (err) {
                console.error('Google Tag Manager is not loaded');
            }
            PortfolioApi.catchError(err);
        }
    };

    static parseResponse = (response) => response.json();

    static checkStatus = (response) => {
        if (!response.ok) {
            throw new Error(`${response.status}: ${response.statusText}`);
        }
    }

    static catchError = (err) => {
        alert('Кажется что-то не так:(. Пожалуйста обновите страницу и попробуйте ещё раз. Если не поможет, свяжитесь со мной!');
        throw err;
    }
};