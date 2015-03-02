<?php

$title  = 'Lista de Alunos';
$file   = file_get_contents('db/alunos.json');
$alunos = json_decode($file);

require 'views/lista-alunos.phtml';