<?php

use Database\Crud;

require_once '../env.php';

$crud = new Crud();

/* Cria */
$_POST['nome'] = 'Nome1';
$crudCreate = $crud->create('pessoas', $_POST);
echo $crudCreate;