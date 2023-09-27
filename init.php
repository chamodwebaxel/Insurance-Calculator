<?php

ob_start();

if(! session_id()){
    session_start();
}

// include_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/database.php';


