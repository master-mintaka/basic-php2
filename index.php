<?php

require 'functions.php';
require 'router.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
