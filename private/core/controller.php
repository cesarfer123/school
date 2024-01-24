<?php 

class Controller
{

    public function view($view,$data=array())
    {
        extract($data);
        $filename="../private/views/".$view.".view.php";
        if(file_exists($filename)){
            require $filename;
        }else{
            require "../private/views/404.view.php";
        }
    }

    public function load_model($model)
    {
        if(file_exists("../private/models/".ucfirst($model).".php")){
            require("../private/models/".ucfirst($model).".php");
            return $model=new $model();
        }

        return false;

    }

    public function redirect($link){

        header("Location: " .ROOT. "/".trim($link,"/"));
        die;
    }

    
} 