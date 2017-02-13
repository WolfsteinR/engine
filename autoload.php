<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11.02.2017
 * Time: 18:59
 */


function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    //print_r($fileName);exit;
    require $fileName;
}
spl_autoload_register('autoload');