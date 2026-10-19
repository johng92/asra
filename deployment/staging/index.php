<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$appPath = dirname(__DIR__, 2) . '/asra-staging';

if (file_exists($maintenance = $appPath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

require $appPath . '/vendor/autoload.php';

/** @var Application $app */
$app = require_once $appPath . '/bootstrap/app.php';

$app->usePublicPath(__DIR__); //That tells Laravel that the actual public directory is ngodemo, so Laravel's public-path-dependent functionality points to the deployed public directory. Laravel exposes usePublicPath() specifically for setting the application's public/web path. line8

$app->handleRequest(Request::capture());