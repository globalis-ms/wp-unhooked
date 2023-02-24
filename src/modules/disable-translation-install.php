<?php

namespace Globalis\WP\WPUnhooked;

if (PHP_SAPI !== 'cli') {
    add_filter('pre_site_transient_available_translations', '__return_empty_array');
}
