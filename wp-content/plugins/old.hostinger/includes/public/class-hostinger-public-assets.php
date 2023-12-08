<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Hostinger_Public_Assets {
	public function __construct() {
		$helper = new Hostinger_Helper();
		if ( $helper->is_preview_domain() ) {
			add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_preview_css' ] );
		}
	}

	public function enqueue_preview_css(): void {
		if ( is_user_logged_in() ) {
			wp_enqueue_style( 'hostinger-preview-styles', HOSTINGER_ASSETS_URL . '/css/hts-preview.css', [], HOSTINGER_VERSION );
		}
	}
}

new Hostinger_Public_Assets();
