<?php

define('URI', $_SERVER['REQUEST_URI']);
define('HTTP_METHOD', $_SERVER['REQUEST_METHOD']);

require_once('controllers/FaleConosco.php');

$routes['GET']['/fale-conosco'] = 'Controller\FaleConosco::formulario';
$routes['POST']['/fale-conosco/send'] = 'Controller\FaleConosco::sendEmail';

if (! isset($routes[HTTP_METHOD][URI])) {
  http_response_code(404);
  exit('Error 404 - Página não encontrada!');
}

try {
  /** Chama uma função de usuário dada pelo primeiro parâmetro */
  call_user_func($routes[HTTP_METHOD][URI]);
} catch (Exception $e) {
  echo $e->getMessage();
}