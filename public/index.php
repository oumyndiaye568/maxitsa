<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/../vendor/autoload.php';

require_once __DIR__ . '/../app/config/boostrap.php';
use App\Core\Router;
require_once __DIR__ .'/../routes/route.web.php';
 Router::resolve($routes);
