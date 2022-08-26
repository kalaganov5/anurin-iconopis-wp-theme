import { showModal } from './modal.js';
const contactFormMainId = 22;

const formHandler = () => {
	// Успешная отправка формы
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( contactFormMainId === event.detail.contactFormId ) {
			showModal( 'modal-success' );
		}
	}, false );
};

export { formHandler };
