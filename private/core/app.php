<?php

class App
{
    protected $controller="home";
    protected $method="index";
    protected $params=array();

    public function __construct()
    {
        $URL=$this->getURL();
        $filename="../private/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename)){
            $this->controller=ucfirst($URL[0]);
            unset($URL[0]);
        }

        require $filename;
        $this->controller=new $this->controller();
        // require "../private/controllers/".$this->controller.".php";

        if(isset($URL[1])){
            if(method_exists($this->controller,$URL[1])){
                $this->method=strtolower($URL[1]);
                unset($URL[1]);
            }
        }

        $URL=array_values($URL);
        $this->params=$URL;
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function getURL(){

        $URL=$_GET['url'] ?? 'home';
        $URL=trim($URL,'/');
        $URL=filter_var($URL,FILTER_SANITIZE_URL);
        $URL=explode("/",$URL);
        
        return $URL; 
    }


}