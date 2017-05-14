<?php 

$container = $app->getContainer();

$container['view'] = function ($c) {
	$view = new Slim\Views\Twig(__DIR__ . '/../storage/views', [
		'cache' => false,
	]);
	$view->addExtension(new Slim\Views\TwigExtension(
		$c->router,
		$c->request->getUri()
	));
	return $view;
};

$container['logger'] = function ($c) {
	$settings = $c['settings']['logger'];
	$logger = new Monolog\Logger($settings['name']);
	$logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
	return $logger;
};

$container['date'] = function ($c) {
	return Carbon\Carbon::now(env('APP_DATE'));
};

$container['db'] = function ($c) {
	$capsule = new Illuminate\Database\Capsule\Manager;
	$capsule->addConnection($c['settings']['db']);
	$capsule->setAsGlobal();
	$capsule->bootEloquent();
	return $capsule;
};
$container->get('db');

