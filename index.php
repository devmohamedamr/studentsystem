<?php

require_once "path.php";



require_once MODEL."/userModel.php";
require_once MODEL."/courseCategoryModel.php";
require_once MODEL."/userlogModel.php";
require_once MODEL."/usertypeModel.php";

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
//print_r($courseCat->select($courseCatData,$courseCatWhere));
echo '</pre>';
//Insert..
$courseCatInsert = ['category_name'=>'Ajax'];
//print_r($courseCat->insert($courseCatInsert));
//Update..
$courseCatUpdate = ['category_name'=>'Ruby'];
$courseCatWhereUpdate = array('id'=>3);
echo '<pre>';
//print_r($courseCat->update($courseCatUpdate,$courseCatWhereUpdate));
echo '</pre>';
//Delete..
$courseCatWhereDelete = array('id'=>2);
echo '<pre>';
//print_r($courseCat->delete($courseCatWhereDelete));
echo '</pre>';
/* CourseCategoryModel */

/* UserLogModel */
$userLog= new userlogModel();
//Select..
$userLogData = ['user_id','user_type_id','user_name','user_password'];
$userLogWhere = array('user_name ='=>'ahmed','and user_password ='=> '789');
echo '<pre>';
//print_r($userLog->select($userLogData,$userLogWhere));
echo '</pre>';
//Insert..
$userLogInsert = ['user_id'=>'4','user_type_id'=>'1','user_name'=>'ahmed','user_password'=>'789'];
//print_r($userLog->insert($userLogInsert));
//Update..
$userLogUpdate = ['user_password'=> 'kkk'];
$userLogWhereUpdate = array('user_id'=>4);
echo '<pre>';
//print_r($userLog->update($userLogUpdate,$userLogWhereUpdate));
echo '</pre>';
//Delete..
$userLogWhereDelete = array('id'=>8);
echo '<pre>';
//print_r($userLog->delete($userLogWhereDelete));
echo '</pre>';
/* UserLogModel */

/* UserTypeModel */
$usertype= new usertypeModel();
//Select Without where..
echo '<pre>';
//print_r($usertype->Query());
echo '</pre>';
//Select..
$usertypeData = ['id','type_title'];
$usertypeWhere = array('type_title ='=>'admin');
echo '<pre>';
//print_r($usertype->select($usertypeData,$usertypeWhere));
echo '</pre>';
//Insert..
$usertypeInsert = ['type_title'=>'employee'];
//print_r($usertype->insert($usertypeInsert));
//Update..
$usertypeUpdate = ['type_title'=> 'Employee'];
$usertypeWhereUpdate = array('id'=>5);
echo '<pre>';
//print_r($usertype->update($usertypeUpdate,$usertypeWhereUpdate));
echo '</pre>';
//Delete..
$usertypeWhereDelete = array('id'=>5);
echo '<pre>';
//print_r($usertype->delete($usertypeWhereDelete));
echo '</pre>';
/* UserTypeModel */