<?php
spl_autoload_register(function($className){
    $className = str_replace("\\",DIRECTORY_SEPARATOR,$className);
    $path = getcwd()."/classes/{$className}.php";
//zmiana pliku w branchu nowym, żeby zrobić request pulla
    include_once($path);
});

?>
