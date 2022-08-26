<?php
// remove p in cf7
// https://pineco.de/snippets/remove-p-tag-from-contact-form-7/
add_filter('wpcf7_autop_or_not', '__return_false');

/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});

// delete style cf7
// https://www.isitwp.com/deregister-contact-form-7-css-style-sheet/
// add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

// add data attribute
add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
function imp_wpcf7_form_elements( $content ) {
    $str_pos = strpos( $content, 'name="phone"' );
    if ( $str_pos !== false ) {
        $content = substr_replace( $content, 'data-tel-input=""', $str_pos, 0 );
    }
    return $content;
}

// validation phone
function custom_filter_wpcf7_is_tel( $result, $tel ) { 
	$result = preg_match( '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){11,14}(\s*)?$/', $tel ); // source: https://qna.habr.com/q/84360
	return $result; 
  }
add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );