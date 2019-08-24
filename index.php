<?php

require_once "path.php";



require_once MODEL."/userModel.php";

$user = new userModel();
//echo "<pre>";
$userdata = [
    'name'=>'samy',
    'city'=>'giza',
    'user_type'=>1
];

$where = [
    'id' => 2
];
$user->delete($where);