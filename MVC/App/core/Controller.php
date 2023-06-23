<?php

class controller{
    public function model($model){
        require_once '../app/models/'. $model . '.php';
        return new $model;
    }

   
    public function view($view, $data = []) {
        extract($data); // Ekstrak data menjadi variabel
        require_once '../app/views/' . $view . '.php';
    }
}
