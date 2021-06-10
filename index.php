<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::post('signup', 'DefaultController');
Router::get('series', 'DefaultController');
Router::get('recentlyadded', 'DefaultController');
Router::get('playmovie', 'DefaultController');
Router::get('movies', 'DefaultController');
Router::get('login1', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('addMovie', 'SecurityController');
Router::post('register', 'SecurityController');
Router::get('addmovie', 'DefaultController');
Router::run($path);