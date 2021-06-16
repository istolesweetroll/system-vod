<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function search()
    {
        $this->render('search');
    }
    public function index()
    {
        $this->render('movies');
    }
    public function movies()
    {
        $this->render('movies');
    }

    public function login1()
    {
        $this->render('login1');
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
    public function addseries()
    {
        $this->render('addseries');
    }
    public function searchResults()
    {
        $this->render('searchResults');
    }
}