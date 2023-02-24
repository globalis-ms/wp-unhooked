<?php

namespace Globalis\WP\WPUnhooked;

add_action('admin_menu', function () {
    global $submenu;

    if (!is_array($submenu) || !isset($submenu['themes.php']) || !is_array($submenu['themes.php'])) {
        return;
    }

    $url_customize = false;

    foreach ($submenu['themes.php'] as $submenu_page) {
        if ('customize' === $submenu_page[1]) {
            $url_customize = $submenu_page[2];
        }
    }

    if (empty($url_customize)) {
        return;
    }

    remove_submenu_page('themes.php', $url_customize);
});

add_action('current_screen', function () {
    global $pagenow;

    $current_screen = get_current_screen();

    if (!is_a($current_screen, "WP_Screen")) {
        return;
    }

    if ("customize.php" === $pagenow && "customize" === $current_screen->id) {
        wp_safe_redirect(admin_url());
        exit;
    }
});
