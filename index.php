<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);
Router::get('search', 'DefaultController');
Router::get('', 'DefaultController');
Router::get('movie', 'DefaultController');
Router::post('signup', 'DefaultController');
Router::post('searchResults', 'DefaultController');
Router::get('series', 'DefaultController');
Router::get('recentlyadded', 'DefaultController');
Router::get('playmovie', 'DefaultController');
Router::get('movies', 'DefaultController');
Router::get('login1', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('addMovie', 'SecurityController');
Router::post('register', 'SecurityController');
Router::get('addmovie', 'DefaultController');
Router::get('addseries', 'DefaultController');
Router::get('addSeries', 'SecurityController');
Router::run($path);