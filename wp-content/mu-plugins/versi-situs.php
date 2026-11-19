<?php
/**
 * Plugin Name: Versi situs
 * Description: Shows which version of this repository the site runs, so you can
 *              see the same change on localhost and in production.
 */

defined( 'ABSPATH' ) || exit;

const VERSI_SITUS = '1.1';

add_action(
	'wp_body_open',
	static function () {
		printf(
			'<div style="background:#f97316;color:#fff;text-align:center;padding:8px 12px;font:600 16px/1.4 system-ui,sans-serif">%s</div>',
			esc_html( 'Versi ' . VERSI_SITUS . ' · kode dari GitHub dPanel-ID/wp-demo-blog' )
		);
	}
);
