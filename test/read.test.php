<?php

use Database\Crud;

require_once '../env.php';

$crud = new Crud();


/* Lê */
$crudRead = $crud->read('pessoas');
var_dump($crudRead);