<?php

namespace Globalis\WP\WPUnhooked;

add_action('admin_bar_menu', function () {
    remove_action('admin_bar_menu', 'wp_admin_bar_sidebar_toggle', 0);
}, 0);