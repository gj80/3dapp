<?php
  class Home extends Controller{
    public function __construct(){
      $this->model = $this->model();
    }

    public function index(){
      $this->view('home');
    }

    public function error() {
      $this->view("error");
    }
  }