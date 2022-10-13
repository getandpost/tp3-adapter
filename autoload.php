<?php

function classLoader($class)
{
    // @todo: 不知为什么没进去
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/src/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('classLoader');

require_once __DIR__ . '/src/Adapter.php';
require_once __DIR__ . '/src/Models/CasbinRule.php';
