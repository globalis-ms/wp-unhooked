# [wp-unhooked](https://github.com/globalis-ms/wp-unhooked)

[![Latest Stable Version](https://poser.pugx.org/globalis/wp-unhooked/v/stable)](https://packagist.org/packages/globalis/wp-unhooked)
[![License](https://poser.pugx.org/globalis/wp-unhooked/license)](https://github.com/globalis-ms/wp-unhooked/blob/master/LICENSE.md)

Disable things from WordPress core and clean administration. Have a cleaner, lighter and faster application.

[![wp-cubi](https://github.com/globalis-ms/wp-unhooked/raw/master/.resources/wp-unhooked-500x150.png)](https://github.com/globalis-ms/wp-unhooked/)

## Requirements

- PHP 8.0, 8.1 or 8.2

## Installation

- `composer require globalis/wp-unhooked`
- Copy and edit this code into your wp-config.php file, or in a mu-plugin :

```php
define('WP_UNHOOKED_CONFIG', [
    'disable-admin-bar' => false,
    'disable-admin-bar-comments-menu' => false,
    'disable-admin-bar-customize-menu' => false,
    'disable-admin-bar-edit-menu' => false,
    'disable-admin-bar-edit-site-menu' => false,
    'disable-admin-bar-howdy' => false,
    'disable-admin-bar-my-account-menu' => false,
    'disable-admin-bar-my-sites-menu' => false,
    'disable-admin-bar-new-content-menu' => false,
    'disable-admin-bar-recovery-mode-menu' => false,
    'disable-admin-bar-search-menu' => false,
    'disable-admin-bar-sidebar-toggle' => false,
    'disable-admin-bar-site-menu' => false,
    'disable-admin-bar-site-nav-menus' => false,
    'disable-admin-bar-site-themes' => false,
    'disable-admin-bar-site-widgets' => false,
    'disable-admin-bar-updates-menu' => false,
    'disable-admin-bar-wp-menu' => false,
    'disable-admin-dashboard-tab-help' => false,
    'disable-admin-dashboard-tab-screen-options' => false,
    'disable-admin-dashboard-welcome-panel' => false,
    'disable-admin-dashboard-widget-activity' => false,
    'disable-admin-dashboard-widget-browser-nag' => false,
    'disable-admin-dashboard-widget-incoming-links' => false,
    'disable-admin-dashboard-widget-plugins' => false,
    'disable-admin-dashboard-widget-primary' => false,
    'disable-admin-dashboard-widget-quick-press' => false,
    'disable-admin-dashboard-widget-recent-comments' => false,
    'disable-admin-dashboard-widget-recent-drafts' => false,
    'disable-admin-dashboard-widget-right-now' => false,
    'disable-admin-dashboard-widget-site-health' => false,
    'disable-admin-footer' => false,
    'disable-admin-tab-help' => false,
    'disable-admin-tab-screen-options' => false,
    'disable-admin-tools-erase-personal-data' => false,
    'disable-admin-tools-export' => false,
    'disable-admin-tools-export-personal-data' => false,
    'disable-admin-tools-import' => false,
    'disable-admin-tools-site-health' => false,
    'disable-asset-versioning' => false,
    'disable-auto-updates' => false,
    'disable-block-editor' => false,
    'disable-browser-check' => false,
    'disable-capital-p-dangit' => false,
    'disable-comments' => false,
    'disable-emojis' => false,
    'disable-frontend-wp-info' => false,
    'disable-php-version-check' => false,
    'disable-rest-api' => false,
    'disable-sitemaps' => false,
    'disable-smilies' => false,
    'disable-taxonomy-category' => false,
    'disable-taxonomy-post-format' => false,
    'disable-taxonomy-post-tag' => false,
    'disable-trackbacks' => false,
    'disable-update-notices' => false,
    'disable-xmlrpc' => false,
]);
```

## Development

Before opening pull requests, please check and apply project coding standards with `./vendor/bin/phpcs .` and/or `./vendor/bin/phpcbf .`
