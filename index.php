<?php

require_once "path.php";


$data =  $db->query("SELECT * FROM `user`")->fetchAll();

