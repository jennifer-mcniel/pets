<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require vendor
require_once ('vendor/autoload.php');

//Instantiate
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function(){
    echo '<h1>Hello Pets</h1>';
});

//Run Fat-Free
$f3->run();