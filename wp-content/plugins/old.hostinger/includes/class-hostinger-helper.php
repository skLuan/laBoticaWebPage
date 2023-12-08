<?php

class Hostinger_Helper {
	public const HOSTINGER_FREE_SUBDOMAIN_URL = 'hostingersite.com';
	public const HOSTINGER_PAGE = [
		'/wp-admin/admin.php?page=hostinger'
	];

	/**
	 *
	 * Check if plugin is active
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public static function is_plugin_active( $plugin_slug ): bool {
		$active_plugins = (array) get_option( 'active_plugins', array() );
		foreach ( $active_plugins as $active_plugin ) {
			if ( strpos( $active_plugin, $plugin_slug . '.php' ) !== false ) {
				return true;
			}
		}

		return false;
	}

	public static function get_api_token(): string {
		$api_token  = '';
		$token_file = HOSTINGER_WP_TOKEN;

		if ( file_exists( $token_file ) && ! empty( file_get_contents( $token_file ) ) ) {
			$api_token = file_get_contents( $token_file );
		}

		return $api_token;
	}

	/**
	 *
	 * Get the host info (domain, subdomain, subdirectory)
	 *
	 * @since    1.7.0
	 * @access   public
	 */

	public function get_host_info(): string {
		$host     = $_SERVER['HTTP_HOST'] ?? '';
		$site_url = get_site_url();
		$site_url = preg_replace( '#^https?://#', '', $site_url );

		if ( ! empty( $site_url ) && ! empty( $host ) && strpos( $site_url, $host ) === 0 ) {
			if ( $site_url === $host ) {
				return $host;
			} else {
				return substr( $site_url, strlen( $host ) + 1 );
			}
		}

		return $host;
	}

	public function is_preview_domain(): bool {
		if ( function_exists( 'getallheaders' ) ) {
			$headers = getallheaders();
		}

		if ( isset( $headers['X-Preview-Indicator'] ) && $headers['X-Preview-Indicator'] ) {
			return true;
		}

		return false;
	}

	public function is_free_subdomain(): bool {
		$site_url = preg_replace( '#^https?://#', '', get_site_url() );

		return ! empty( $site_url ) && strpos( $site_url, self::HOSTINGER_FREE_SUBDOMAIN_URL ) !== false;
	}

	public function is_hostinger_admin_page(): bool {
		$current_uri = sanitize_text_field( $_SERVER['REQUEST_URI'] );

		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		if ( isset( $current_uri ) && strpos( $current_uri, '/wp-json/' ) !== false ) {
			return false;
		}

		if ( in_array( $current_uri, self::HOSTINGER_PAGE ) ) {
			return true;
		}

		return false;

	}

}

$hostiner_helper = new Hostinger_Helper();
