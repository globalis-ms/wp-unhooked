<?php

namespace Globalis\WP\WPUnhooked;

add_action('admin_menu', function () {
    remove_submenu_page('themes.php', 'themes.php');
});

add_action('current_screen', function () {
    global $pagenow;

    $current_screen = get_current_screen();

    if (!is_a($current_screen, "WP_Screen")) {
        return;
    }

    if ("themes.php" === $pagenow && "themes" === $current_screen->id) {
        wp_safe_redirect(admin_url());
        exit;
    }
});
