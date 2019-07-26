<?php
//load config
require_once 'config/config.php';

//require_once 'libraries/core.php';
//require_once 'libraries/controller.php';
//require_once 'libraries/database.php';

//autoload libraries
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});