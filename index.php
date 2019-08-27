<?php

require_once "path.php";



require_once MODEL."/userModel.php";
require_once MODEL."/courseCategoryModel.php";

/* UserModel */
$user = new userModel();
$userdata = ['name'=>'samy','city'=>'giza','user_type'=>1];
$where = ['id' => 2];
//print_r($user->Query());
//$user->delete($where);


/* CourseCategoryModel */
$courseCat=new courseCategoryModel();
//Select..
$courseCatData = ['id','category_name'];
$courseCatWhere = array('id'=>3);
echo '<pre>';
print_r($courseCat->select($courseCatData,$courseCatWhere));
echo '</pre>';
//Insert..
$courseCatInsert = ['category_name'=>'Ajax'];
print_r($courseCat->insert($courseCatInsert));
//Update..
$courseCatUpdate = ['category_name'=>'Ruby'];
$courseCatWhereUpdate = array('id'=>3);
echo '<pre>';
print_r($courseCat->update($courseCatUpdate,$courseCatWhereUpdate));
echo '</pre>';
//Delete..
$courseCatWhereDelete = array('id'=>2);
echo '<pre>';
print_r($courseCat->delete($courseCatWhereDelete));
echo '</pre>';
/* CourseCategoryModel */