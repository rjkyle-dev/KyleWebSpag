<?php

session_start();

// define("ABSPATH", __DIR__);

require "../core/init.php";

$url = $_GET['kyle'] ?? "login";
$controller = strtolower($url);

if(file_exists("../backend/".$controller.".php")) {
   
   require "../backend/".$controller.".php";
}
else {
  print "Controller Not Found";
}