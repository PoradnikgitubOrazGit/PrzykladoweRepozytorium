<?php
spl_autoload_register(function($className){
    $className = str_replace("\\",DIRECTORY_SEPARATOR,$className);
    $path = getcwd()."/classes/{$className}.php";

    include_once($path);
});
?>