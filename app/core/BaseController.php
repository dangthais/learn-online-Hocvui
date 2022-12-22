<?php
    class BaseController{
        public function model($model){
            require_once "./admin/app/models/"."$model".".php";
            return new $model;
        }
        public function view($view,$data=[]){
            require_once "./app/views/".$view.".php";
        }
    }