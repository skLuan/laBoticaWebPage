<?php
/**
 * Plugin Name: Affiliate Plugin
 * Description: "Affiliate Plugin" serves the purpose of integrating affiliate links into the WordPress website.
 */

defined( 'ABSPATH' ) || exit;

class Hostinger_Affiliates {
    public const AFFILIATE_ID = '3107422';

    public function __construct() {
        if ( is_admin() ) {
            $this->define_admin_hooks();
        }
    }

    public function astra_pro_affiliate_link( string $url ): string {
        return add_query_arg( 'bsf', '5643', $url );
    }

    public function affiliate_monsterinsights( $id ): string {
        return self::AFFILIATE_ID;
    }

    public function wpforms_upgrade_link( string $link ): string {
        return 'https://shareasale.com/r.cfm?b=834775&u=3107422&m=64312&urllink=' . rawurlencode( $link );
    }

    public function aioseo_upgrade_link( string $link ): string {
        return 'https://shareasale.com/r.cfm?b=1491200&u=3107422&m=94778&urllink=' . rawurlencode( $link );
    }

    private function define_admin_hooks(): void {
        add_filter( 'astra_get_pro_url', [ $this, 'astra_pro_affiliate_link' ], 10, 2 );
        add_filter( 'optinmonster_sas_id', [ $this, 'affiliate_monsterinsights' ] );
        add_filter( 'monsterinsights_shareasale_id', [ $this, 'affiliate_monsterinsights' ] );
        add_filter( 'wpforms_upgrade_link', [ $this, 'wpforms_upgrade_link' ] );
        add_filter( 'aioseo_upgrade_link', [ $this, 'aioseo_upgrade_link' ] );
    }

}

new Hostinger_Affiliates();
