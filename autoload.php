<?php

/**
 * Implementação específica do projeto.
 *
 * @param string $ class O nome totalmente qualificado da classe.
 * @return void
 */

function autoload($class)
{
    // directórios especificos para requisição dos namespace
    $baseDir = [
        __DIR__ . DIRECTORY_SEPARATOR . 'Config' . $class . '.php',
        __DIR__ . DIRECTORY_SEPARATOR . 'Database' . $class . '.php',
    ];

    // use a quantidade de item do array como referência, procure
    for ($i = 0; $i < count($baseDir); $i++) {

        // substitua \\ por / no index do directório base  
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $baseDir[$i]);

        /**
         * Debuggar caso seja necessário
         * 
         * $baseDir[$i] Mostra o caminho e a class 
         */
        // echo "<br/>".$baseDir[$i]."<br/>";

        // se o arquivo existir e não for um directório, exija-o 
        if (file_exists($class) && !is_dir($class)) {
            include $class;
        }
    }
}

spl_autoload_register('autoload');
