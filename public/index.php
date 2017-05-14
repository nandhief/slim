<?php
if (PHP_SAPI == 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/helper.php';

session_start();

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$settings = require __DIR__ . '/../config/app.php';
$app = new Slim\App($settings);

require __DIR__ . '/../config/dependencies.php';

require __DIR__ . '/../config/middleware.php';

require __DIR__ . '/../config/controller.php';

require __DIR__ . '/../config/routes.php';

// Run app
$app->run();
