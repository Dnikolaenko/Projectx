<?php

spl_autoload_register(function($classname){
  $classname = str_replace("\\", "/", $classname) . ".php";
  $path = __DIR__ . DIRECTORY_SEPARATOR . $classname;
  if (is_file($path) && is_readable($path)) {
    require_once $path;
  } else {
    die("file is not created or unreadable!");
  }
});
