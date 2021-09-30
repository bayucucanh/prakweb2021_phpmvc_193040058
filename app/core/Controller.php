<?php 
// class Controller merupakan class utama yang mengatur semua controllers
class Controller {
  public function view($view, $data = []) {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model) {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}
