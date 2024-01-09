# Plugin: 00-mi-seo-press-cookie-plugin

## Descripción

Este plugin de WordPress permite a los usuarios gestionar sus cookies a través de un botón personalizado desde los menus nativos de Wordpress u otros botones, en lugar del botón nativo que proporciona el plugin SEOpress. Además, oculta el botón nativo para una mejor experiencia del usuario.

## Requisitos

- WordPress 5.x o superior.
- Plugin SEOpress instalado y activo.

## Instalación

1. Descarga el plugin y sube la carpeta `00-mi-seo-press-cookie-plugin` a la carpeta `/wp-content/plugins/` de tu sitio WordPress.
2. Activa el plugin a través del menú "Plugins" en WordPress.

## Uso

Una vez activado el plugin:

1. Añade un elemento de menú con la clase `mi-seo-press-cookie` en tu menú de WordPress, y añade como enlace `#mi-seo-press-cookie`. Esto puede hacerse en `Apariencia -> Menús`.
2. Asegúrate de que el plugin SEOpress está configurado como deseas, ya que este plugin modifica su comportamiento.

## Funcionalidades

- Oculta el botón nativo de ajuste de cookies de SEOpress.
- Permite abrir el banner de ajuste de cookies de SEOpress a través de un botón personalizado en el menú nativo de WordPress.

## Desarrollo

Este plugin utiliza PHP para el backend y jQuery para el frontend.

- PHP: Se encarga de encolar los estilos y scripts necesarios.
- jQuery: Escucha los eventos del botón personalizado y dispara el banner de ajuste de cookies de SEOpress.

## Contribución

Si encuentras algún error o tienes alguna sugerencia de mejora, por favor, abre un issue en GitHub.

## Licencia

GPL-2.0 License

