<?php

namespace Globalis\WP\WPUnhooked;

add_action('wp_dashboard_setup', function () {
    remove_meta_box('dashboard_browser_nag', 'dashboard', 'normal');
});
