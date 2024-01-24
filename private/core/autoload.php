<?php

require("config.php");
require("database.php");
require("controller.php");
require("model.php");
require("app.php");

spl_autoload_register(function($classname){
    require "../private /models/".ucfirst($classname).".php";
});