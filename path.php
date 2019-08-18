<?php

define("ROOT",dirname(__FILE__));

define("APP",ROOT."/app");

define("ADMIN",APP."/admin");
define("INSTRUCTOR",APP."/instructor");
define("STUDENT",APP."/student");

define("LIBS",ROOT."/libs");
define("PDO",LIBS."/pdo");
define("MODEL",ROOT."/model");
define("PUBLIC",ROOT."/public");



include_once PDO.'/class/class.pdowrapper.php';
// database connection setings
$dbConfig = array(
    "host"=>"localhost",
    "dbname"=>"course_mangment",
    "username"=>"root",
    "password"=>""
);
// get instance of PDO Wrapper object
$db = new PdoWrapper($dbConfig);
