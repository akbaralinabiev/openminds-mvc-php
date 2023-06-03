<?php
  class Controller {
    // Here we load model from controlles
    public function model($model){
      require_once '../app/models/' . $model . '.php';
      return new $model();
    }

    // And here we load view from controllers
    public function view($url, $data = []){
      if(file_exists('../app/views/'.$url.'.php')){
        require_once '../app/views/'.$url.'.php';
      } else {
        die('View does not exist');
      }
    }
  }