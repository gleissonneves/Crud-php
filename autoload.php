<?php

/**
 * AUTOLOAD DE CLASSES DENTRO DO PACOTE 'Class'
 * 
 * @param $classe
 */
function autoload($classe)
{
    $diretorioBase = DIR_APP . DS;
    $classe = $diretorioBase . 'Class' . DS . str_replace('\\', DS, $classe) . '.php';
    
    // debugger
    // echo $classe."<br/>";
    
    
    if (file_exists($classe) && !is_dir($classe)) {
        include $classe;
    }
}

spl_autoload_register('autoload');