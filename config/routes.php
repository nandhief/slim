<?php 

$app->get('/[{name}[/{age}]]', function ($req, $res, $args) {
	return $this->view->render($res, 'index.twig', $args);
});


