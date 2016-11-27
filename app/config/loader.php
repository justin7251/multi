<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Multi\Models' => APP_PATH . '/common/models/',
    'Multi'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Multi\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Multi\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
