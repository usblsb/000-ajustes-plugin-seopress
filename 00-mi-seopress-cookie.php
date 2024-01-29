<?php
/**
 * Plugin Name: 000 Ajustes para plugin SeoPress - ON MUY IMPORTANTE en GITHUB
 * Plugin URI: https://webyblog.es/
 * Description: Abre la ventana de cookies del plugin SeoPress cuando se haga click en un boton del menu con el enlace #mi-seo-press-cookie y la clase .mi-seo-press-cookie. Tambien aplica CSS al banner de aviso de las Cookies de SeoPress.
 * Version: 29-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://webyblog.es/
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}



// Codigo para añadir enlace de Ayuda en el plugin que muestra el fichero ayuda.html
add_filter('plugin_action_links', 'jlmr_agregar_enlace_ayuda_seopress', 10, 2);

function jlmr_agregar_enlace_ayuda_seopress($links, $file) {
    // Obtenemos el 'basename' del archivo actual
    $plugin_basename = plugin_basename(__FILE__);

    // Comprobamos si estamos en el plugin correcto antes de agregar el enlace
    if ($file == $plugin_basename) {
        // Construimos la URL del archivo de ayuda
        $ayuda_url = plugins_url('ayuda.html', __FILE__);

        // Añadimos el nuevo enlace de ayuda al array de enlaces
        $enlace_ayuda = '<a  rel="noopener noreferrer nofollow" href="' . esc_url($ayuda_url) . '" target="_blank">Ayuda</a>';
        array_push($links, $enlace_ayuda);
    }

    return $links;
}



// Función para encolar el css que oculta el boton original de ajuste de cookies del banner de SeoPress
function jlmr_enqueue_styles_mi_seopress() {
    wp_enqueue_style( '00-mi-seopress-cookie', plugin_dir_url( __FILE__ ) . '00-mi-seopress-cookie.css' );
}
// Aquí, establecemos la prioridad a 50, lo que hace que se cargue más tarde.
add_action( 'wp_enqueue_scripts', 'jlmr_enqueue_styles_mi_seopress', 50 );



// Función para encolar el script JS 00-mi-seopress-script.js
function jlmr_enqueue_custom_script_mi_seopress() {
    wp_enqueue_script('00-mi-seopress-script', plugin_dir_url(__FILE__) . '00-mi-seopress-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'jlmr_enqueue_custom_script_mi_seopress');
