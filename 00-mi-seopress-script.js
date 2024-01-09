jQuery(document).ready(function ($) {
    $('li.mi-seo-press-cookie a').on('click', function (event) {
        event.preventDefault();
        
        if ($('#seopress-user-consent-edit').length > 0) {
            $('#seopress-user-consent-edit').trigger('click');
        }
    });
});
