<?php 

$app->get('/about', function() {
	return 'Slim Framework v3';
});

$app->get('/[{name}[/{age}]]', 'HomeController:index');

