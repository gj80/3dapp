<?php
  /* 
   *  CORE CONTROLLER CLASS
   *  Loads Models & Views
   */
  class Controller {
    public function model(){
      require_once './app/models/DB.php';
      return new DB();
    }

    public function view($url, $data = []){
      if(file_exists('./app/views/pages/'.$url.'.php')){
        require_once './app/views/pages/'.$url.'.php';
      } else {
        die('View does not exist');
      }
    }
  }