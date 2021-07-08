<?php
<<<<<<< HEAD
    //Load the model and the view
    class Controller {
        public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        //Load the view (checks for the file)
        public function view($view, $data = []) {
            if (file_exists('../app/views/' . $view . '.php')) {
                require_once '../app/views/' . $view . '.php';
            } else {
                die("View does not exists.");
            }
        }
    }
=======

class Controller{
  public function view($view, $data = []){
    require_once '../app/views/' . $view . '.php';
  }
  public function model($model){
    require_once '../app/models/' . $model . '.php';
    return new $model; // harus instansiasi
  }
}
>>>>>>> 4da6c69bab6385b5f99c0655f9d8dad87551c977
