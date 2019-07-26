<?php

class Controller{

    //load model
    public function model($model){
        //require the model file
        require_once '../app/models/' . $model .'.php';

        //instantiate model
        return new $model();
    }

    //load view
    public function view($view, $data=[]){
        //check the view file
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' .$view . '.php';
        }else{
            die('Views not here!');
        }

    }
}