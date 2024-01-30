<?php

function get_var($key){

    if(isset($_POST[$key])){
        return $_POST[$key];
    }

    return '';
}

function get_select($key,$value){

    if(isset($_POST[$key])){
        if($_POST[$key]==$value){
            return "selected";
        }
    }

    return '';
}



function esc($var){

    return htmlspecialchars($var);
}

function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function random_string($length){

    // Números del 0 al 9
    $numeros = range(0, 9);

    // Letras minúsculas del alfabeto
    $letras_minusculas = range('a', 'z');

    // Letras mayúsculas del alfabeto
    $letras_mayusculas = range('A', 'Z');

    // Combina los tres arrays en uno solo
    $array = array_merge($numeros, $letras_minusculas, $letras_mayusculas);

    $text="";

    for ($x=0; $x < $length; $x++) { 
        $random=rand(0,61);
        $text.=$array[$random];
    }

    return $text;
}