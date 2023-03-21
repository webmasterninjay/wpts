<?php
/**
 * Wpts appearance settings.
 *
 * @package Wpts
 * @author  WebPagesThatSell
 * @license GPL-2.0-or-later
 * @link    https://www.webpagesthatsell.com/
 */

$wpts_default_colors = [
	'link'   => '#0073e5',
	'accent' => '#0073e5',
];

$wpts_link_color = get_theme_mod(
	'wpts_link_color',
	$wpts_default_colors['link']
);

$wpts_accent_color = get_theme_mod(
	'wpts_accent_color',
	$wpts_default_colors['accent']
);

$wpts_link_color_contrast   = wpts_color_contrast( $wpts_link_color );
$wpts_link_color_brightness = wpts_color_brightness( $wpts_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $wpts_link_color,
	'button-color'         => $wpts_link_color_contrast,
	'button-outline-hover' => $wpts_link_color_brightness,
	'link-color'           => $wpts_link_color,
	'default-colors'       => $wpts_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'wpts' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $wpts_link_color,
		],
		[
			'name'  => __( 'Accent color', 'wpts' ),
			'slug'  => 'theme-secondary',
			'color' => $wpts_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'wpts' ),
			'size' => 12,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'wpts' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'wpts' ),
			'size' => 20,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'wpts' ),
			'size' => 24,
			'slug' => 'larger',
		],
	],
];
