<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/MovieRepository.php';

class SecurityController extends AppController {
    public function login()
    {

        $userRepository = new UserRepository();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $userRepository->getUser($username);

        if (!$user) {
            return $this->render('login1', ['messages' => ['User not found!']]);
        }

        if ($user->getUsername() !== $username) {
            return $this->render('login1', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== md5($password)) {
            return $this->render('login1', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: {$url}/series");

    }
    public function register()
    {
        $userRepository = new UserRepository();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['repeatPassword'];

        if ($password !== $confirmedPassword) {
            return $this->render('series', ['messages' => ['Please provide proper password']]);
        }
        $user = new User($email, md5($password),  $username);
        $userRepository->addUser($user);
        return $this->render('series', ['messages' => ['You\'ve been succesfully registrered!']]);
    }
    public function addMovie(){
        $movieRepository = new MovieRepository();
        $title = $_POST['title'];
        $description = $_POST['description'];
        $fileLink = $_POST['fileLink'];
        $coverLink = $_POST['coverLink'];
        $releaseDate = $_POST['releasedate'];
        $category = $_POST['category'];

        $movie = new Movie($title, $description, $fileLink, $coverLink, $releaseDate, $category);
        $movieRepository->addMovie($movie);

        return $this->render('series', ['messages' => ['Movie added!']]);

    }
    public function addSeries(){
        $movieRepository = new MovieRepository();
        $title = $_POST['title'];
        $code = $_POST['code'];
        $fileLink = $_POST['fileLink'];
        $coverLink = $_POST['coverLink'];
        $releaseDate = $_POST['releasedate'];
        $category = $_POST['category'];

        $series = new Series($title, $code, $fileLink, $coverLink, $releaseDate, $category);
        $movieRepository->addSeries($series);

        return $this->render('series', ['messages' => ['Movie added!']]);

    }

}