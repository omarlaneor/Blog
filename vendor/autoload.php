
<?php

spl_autoload_register(function ($class) {

    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php')) {

        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php';
    }
});
