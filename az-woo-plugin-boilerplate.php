<?php
/*
 * Plugin Name:       az-woo-plugin-boilerplate
 * Plugin URI:        https://github.com/samprodam/woo-plugin-boilerplate
 * Description:       Заготовка для плагина woo.
 * Version:           0.0.1
 * Requires at least: 6.5
 * Requires PHP:      7.2
 * Author:            samprodam
 * Author URI:        https://github.com/samprodam
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       az-woo-plugin-boilerplate
 * Domain Path:       /languages
 * Requires Plugins:  woocommerce
 */

// https://developer.wordpress.org/plugins/plugin-basics/header-requirements/

if ( ! defined( 'ABSPATH' ) ) exit;

//Проверка и инициализация
add_action( 'plugins_loaded', 'azwpb_init' );
function azwpb_init() {

	/* подключение файлов*/
        define( 'AZWPB_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
        define( 'AZWPB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

        /* Подключение файлов фронтенда и бэкенда */
        if ( is_admin() ){

            require_once( 'backend/admin.php' );

        } else {

            require_once( 'frontend/front-functions.php' );
            require_once( 'frontend/front-hooks.php' );

        }

}