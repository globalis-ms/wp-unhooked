<?php

namespace Globalis\WP\WPUnhooked;

add_action('admin_menu', function () {
    remove_submenu_page('tools.php', 'tools.php');
});

add_action('current_screen', function () {
    global $pagenow;

    $current_screen = get_current_screen();

    if (!is_a($current_screen, "WP_Screen")) {
        return;
    }

    if ("tools.php" === $pagenow && "tools" === $current_screen->id) {
        wp_safe_redirect(admin_url());
        exit;
    }
});
