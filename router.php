<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/note/create' => 'controllers/notes/create.php',
];

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)):
        require $routes[$uri];
    else:
        abort();
    endif;  
}

routeToController($uri,$routes);