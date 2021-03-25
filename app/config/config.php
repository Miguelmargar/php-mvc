<?php
    // App Root
    define('APPROOT', dirname(dirname(__FILE__)));
    // URL Root
    define('URLROOT', 'http://localhost/miguel/traversymvc');
    // Site Name
    define('SITENAME', 'SharePosts');

    // DB params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    // Needed for passwords in config.php as this file is not added to git
    require 'passwords.php';
    define('DB_PASS', '');
    define('DB_NAME', 'shareposts');
