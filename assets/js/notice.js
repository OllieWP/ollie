(function($) {
    $(document).on('click', '#ollie-activation-notice .notice-dismiss', function() {
        $.post(ajaxurl, {
            action: 'dismiss_theme_activation_notice'
        });
    });
})(jQuery);
