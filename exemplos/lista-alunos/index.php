<?php

/**
 * No console, digite:
 * $ php -S localhost:8000 -t lista-alunos/index.php
 */

$file   = file_get_contents('db/data.json');
$data   = json_decode($file);

$routes['/meus-alunos'] = function() use ($data) { 
  $alunos = $data->alunos; 
  require 'views/lista-alunos.phtml';
};

define('URI', $_SERVER['REQUEST_URI']);

if (! isset($routes[URI])) {
  http_response_code(404);
  exit('Error 404 - Página não encontrada!');
}

/** Chama uma função de usuário dada pelo primeiro parâmetro */
call_user_func($routes[URI]);