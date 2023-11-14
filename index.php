<?php

$URI=parse_url($_SERVER['REQUEST_URI'])['path'] ;

$routes=
[
    '/' => 'controllers/index.php'
];

if(array_key_exists($URI,$routes)){
    require $routes[$URI];
}else{
    // Error 404, not found
}
