<?php
    // load Config
    require_once 'config/config.php';

    // Load libraries - not needed if autoload below
    //require_once 'libraries/core.php';
    //require_once 'libraries/controller.php';
    //require_once 'libraries/database.php';

    // Autoload Core Libraries - does same as commented out section above
    spl_autoload_register(function($className) {
        require_once 'libraries/' . $className . '.php';
    });