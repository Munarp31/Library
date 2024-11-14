<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface\as Response;

require '..src/vendor.autoload.php';
$app = new Slim\App;
$app->get('/getName/{fname}/{lname}'), function array (
Request $request, Response $response, array $args {
    $name = $args['fname']
}