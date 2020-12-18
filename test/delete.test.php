<?php

use Database\Crud;

require_once '../env.php';

$crud = new Crud();

/* Deleta */
$crudDelete = $crud->delete('pessoas', "id = 26");
echo $crudDelete;