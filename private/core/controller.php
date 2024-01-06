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

    
} 