<?php
$GLOBALS['startTime'] = microtime(true);

use Ovo\Modules\ModuleLoader;
use Slim\Container;
use Ovo\Modules\SModuleManager;
use Ovo\Factory\AppFactory;
use App\Source\Decorators\SlimCMS;
use \App\Controllers\HomepageController;
use \App\Controllers\AuthController;
use \App\Controllers\EventController;
use \App\Controllers\MusicController;

session_start();

define('ROOT_PATH', str_replace("/", DIRECTORY_SEPARATOR, realpath(__DIR__ . '/../../') . '/'));

define('APP_PATH', ROOT_PATH . 'app' . DIRECTORY_SEPARATOR);
define('SLIM_PATH', ROOT_PATH . 'src' . DIRECTORY_SEPARATOR);
define('ROUTES_PATH', ROOT_PATH . 'routes' . DIRECTORY_SEPARATOR);
define('CACHE_PATH', ROOT_PATH . 'cache' . DIRECTORY_SEPARATOR);
define('VENDOR_PATH', ROOT_PATH . 'vendor' . DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', ROOT_PATH . 'public' . DIRECTORY_SEPARATOR);
define('RESOURCE_PATH', ROOT_PATH . 'resources' . DIRECTORY_SEPARATOR);

define('MODULE_PATH', ROOT_PATH . 'modules' . DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', RESOURCE_PATH . 'views' . DIRECTORY_SEPARATOR );

$classLoader = require VENDOR_PATH . 'autoload.php';

require SLIM_PATH . 'Helpers'.DIRECTORY_SEPARATOR.'functions.php';

$c = new \Slim\Container();

$clearCache = false;
if (isset($_REQUEST['clear_cache'])) {
    $clearCache = true;
}

// Instantiate the app
$settings = require __DIR__ . '/../../src/settings.php';
$app = new \Slim\App($settings);
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(TEMPLATE_PATH, [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new \Twig_Extension_Debug());
	$view->addExtension(new \nochso\HtmlCompressTwig\Extension());

    return $view;
};


$container['HomepageController'] = function($c){
    //return new \App\Controllers\HomepageController($c);
    //$view = $c->get("view"); // retrieve the 'view' from the container
    return new HomepageController($c);
};

$container['AuthController'] = function($c){
    //return new \App\Controllers\HomepageController($c);
    //$view = $c->get("view"); // retrieve the 'view' from the container
    return new AuthController($c);
};

$container['EventController'] = function($c){
    //return new \App\Controllers\HomepageController($c);
    //$view = $c->get("view"); // retrieve the 'view' from the container
    return new EventController($c);
};

$container['MusicController'] = function($c){
    //return new \App\Controllers\HomepageController($c);
    //$view = $c->get("view"); // retrieve the 'view' from the container
    return new MusicController($c);
};


//$app->add(new \App\Middleware\AuthMiddleware($container));

// Set up dependencies
require __DIR__ . '/../../src/dependencies.php';

// Register middleware
require __DIR__ . '/../../src/middleware.php';

// Register routes
require ROUTES_PATH . 'web.php';

return $app;