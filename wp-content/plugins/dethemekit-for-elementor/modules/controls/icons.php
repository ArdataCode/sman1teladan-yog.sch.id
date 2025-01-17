<?php
namespace DethemeKit\Modules\Controls;

defined( 'ABSPATH' ) || exit;

class Icons{
	public static $_instance = null;
	public function dekit_icons_pack(){
		add_filter( 'elementor/icons_manager/additional_tabs', [ $this, '__add_font']);
	}

	// instance of all control's base class
	public static function get_url(){
		return \Detheme_Kit::module_url() . 'controls/';
	}

	public static function get_dir(){
		return \Detheme_Kit::module_dir() . 'controls/';
	}

	public function __add_font( $font){
        $font_new['dticon'] = [
			'name' => 'dticon',
			'label' => __( 'DethemeKit - Icons', 'dethemekit' ),
			'url' => self::get_url() . 'assets/css/dticon.css',
			'prefix' => 'dticon-',
			'displayPrefix' => 'dticon',
			'labelIcon' => 'eicon-arrow-right',
			'ver' => '5.9.0',
			'fetchJson' => self::get_url() . 'assets/js/dticon.js',
			'native' => true,
		];
        return  array_merge($font, $font_new);
    }
	
	
	public static function __generate_font(){
		global $wp_filesystem;
		require_once ( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
		$css_file =  self::get_url() . 'assets/css/dticon.css';
		if ( $wp_filesystem->exists( $css_file ) ) {
			$css_source = $wp_filesystem->get_contents( $css_file );
		} 
		
		preg_match_all( "/\.(icon-.*?):\w*?\s*?{/", $css_source, $matches, PREG_SET_ORDER, 0 );
		$iconList = [];
		foreach ( $matches as $match ) {
			//$new_icons[$match[1] ] = str_replace('ekit-wid-con .icon-', '', $match[1]);
			$iconList[] = str_replace('icon-', '', $match[1]);
		}
		$icons = new \stdClass();
		$icons->icons = $iconList;
		$icon_data = wp_json_encode($icons);
		$file = Init::get_dir() . 'assets/js/dticon.js';
		global $wp_filesystem;
		require_once ( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
		if ( $wp_filesystem->exists( $file ) ) {
			$content =  $wp_filesystem->put_contents( $file, $icon_data) ;
		} 
		
	}

	public static function _get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

}
