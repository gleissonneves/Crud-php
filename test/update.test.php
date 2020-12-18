<?php

use Database\Crud;

require_once '../env.php';

$crud = new Crud();

/* Atualiza */
$_POST['nome'] = 'test dos santos neves algusto';
$crudUpdate    = $crud->update('pessoas', $_POST, "id = 26");
echo $crudUpdate;