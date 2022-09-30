<?php
spl_autoload_register(function ($className) {
    $classFile = 'vendor/' . $className . '.php';
    if (file_exists($classFile)) {
        include_once $classFile;
        return true;
    }
    return false;
});
$name = Test->name;
echo $name;