<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $className = str_replace('\\', '/', $className);

    include_once($className . '.php');
}
