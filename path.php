<?php

define("ROOT",dirname(__FILE__));

define("APP",ROOT."/app");

define("ADMIN",APP."/admin");
define("INSTRUCTOR",APP."/instructor");
define("STUDENT",APP."/student");

define("LIBS",ROOT."/libs");
define("PDO",LIBS."/pdo");
define("MODEL",ROOT."/model");


include_once PDO.'/class/class.pdowrapper.php';

