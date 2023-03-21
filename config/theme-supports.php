<?php
/**
 * Wpts child theme.
 *
 * Theme supports.
 *
 * @package Wpts
 * @author  WebPagesThatSell
 * @license GPL-2.0-or-later
 * @link    https://my.webpagesthatsell.com/themes/wpts/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'wpts' ),
		'secondary' => __( 'Footer Menu', 'wpts' ),
	],
];
