<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('movies');
    }

    public function login()
    {
        $this->render('login');
    }
    public function signup()
    {
        $this->render('signup');
    }
    public function series()
    {
        $this->render('series');
    }
    public function recentlyadded()
    {
        $this->render('recentlyadded');
    }
    public function playmovie()
    {
        $this->render('playmovie');
    }
    public function addmovie()
    {
        $this->render('addmovie');
    }
  
}