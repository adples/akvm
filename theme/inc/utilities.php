<?php

function calculateGap( $input ) {
	if ( $input !== 0 || $input !== null ) {
		$gap = $input * 2;
	} else {
		$gap = 0;
	}
	return $gap;
}

function list_icon( $icon, $color = 'text-primary' ) {
	$icon_color = $color;
	$string     = '<span class="icon-wrapper ' . $icon_color . '"><span class="' . $icon . '"></span></span>';

	return $string;
}

function btn_icon( $icon, $size ) {
	$string = '<span class="top-1/2 left-1 absolute -translate-y-1/2 ' . $icon . ' ' . $size . '"></span>';

	return $string;
}

// function form_submit_button( $button, $form ) {
// if(is_front_page( )){
// $icon = '<span class="icon-[mdi--arrow-top-right]"></span>';
// return '<button id="gform_submit_button_{'.$form['id'].'}">Send'.$icon.'</button>';
// }
// return;
// }

function form_submit_button( $button, $form ) {
	if ( is_front_page() ) :
		$align = 'justify-end';
	else :
		$align = 'justify-start';
	endif;

	$icon = '<span class="wp-block-button__link-icon fill-white" aria-hidden="true"><svg viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg"><path d="M1.2,0 L2.22044605e-14,1 L4.5,6 L2.22044605e-14,11 L1.1,12 L6.6,6 L1.2,0 Z M7.2,0 L6.1,1 L10.6,6 L6.1,11 L7.2,12 L12.7,6 L7.2,0 L7.2,0 Z"></path></svg></span>';

	return "<div class='wp-block-button flex w-full $align has-icon__next'><button class='inline-flex items-center bg-primary px-6 py-3 rounded-full font-semibold text-white uppercase has-default-gradient-gradient-background' id='gform_submit_button_{$form['id']}'><span>Send&nbsp;&nbsp;</span>$icon</button></div>";
}
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );

/**
 * Return truncated string
 *
 * @param string $text The default comment form arguments.
 *
 * @param string $max_length The default comment form arguments.
 */
function truncate_at_word( $text, $max_length = 40 ) {
	// If the string is already short enough, return it as-is.
	if ( strlen( $text ) <= $max_length ) {
		return $text;
	}

	// Cut the string to the max length.
	$truncated = substr( $text, 0, $max_length );

	// Find the position of the last space within the truncated string.
	$last_space = strrpos( $truncated, ' ' );

	// If there’s a space before the cutoff, truncate there to avoid cutting a word.
	if ( false !== $last_space ) {
		$truncated = substr( $truncated, 0, $last_space );
	}

	// Add ellipsis (optional).
	return rtrim( $truncated ) . '...';
}

add_filter(
	'rank_math/frontend/breadcrumb/items',
	function ( $crumbs ) {
		if ( ! is_single() ) {
			return $crumbs;
		}

		$slug = 'blog';
		$post = get_page_by_path( $slug );
		$blog = array( 'Blog', get_permalink( $post->ID ) );
		array_splice( $crumbs, 1, 0, array( $blog ) );
		return $crumbs;
	},
	10,
	2
);
