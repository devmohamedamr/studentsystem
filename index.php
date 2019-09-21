<?php

require_once "path.php";



require_once MODEL."/userModel.php";
require_once MODEL."/courseCategoryModel.php";
require_once MODEL."/userlogModel.php";
require_once MODEL."/usertypeModel.php";
require_once MODEL."/courseModel.php";
require_once MODEL."/coursegroupModel.php";
require_once MODEL."/paymentmethodModel.php";
require_once MODEL."/paymentstudentModel.php";
require_once MODEL."/paymentrefundModel.php";

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

/* CourseModel */
$Course=new courseModel();
//Select Without where..
echo '<pre>';
//print_r($Course->Query());
echo '</pre>';
//Select..
$courseData = ['id','course_name','course_category'];
$courseWhere = array('course_category ='=>'2');
echo '<pre>';
//print_r($Course->select($courseData,$courseWhere));
echo '</pre>';
//Insert..
$CourseInsert = ['course_name'=>'Java 2','course_category'=>'3'];
//print_r($Course->insert($CourseInsert));
//Update..
$CourseUpdate = ['course_name'=>'Android 2','course_category'=>'2'];
$CourseWhereUpdate = array('id'=>5);
echo '<pre>';
//print_r($Course->update($CourseUpdate,$CourseWhereUpdate));
echo '</pre>';
//Delete..
$CourseWhereDelete = array('id'=>6);
echo '<pre>';
//print_r($Course->delete($CourseWhereDelete));
echo '</pre>';
/* CourseModel */

/* CourseGroupModel */
$coursegroup= new coursegroupModel();

//Select Without where..
echo '<pre>';
//print_r($coursegroup->Query());
echo '</pre>';
//Select..
$courseGroupData = ['course_total_hours', 'course_session_days', 'course_from', 'course_to', 'course_from_time', 'course_to_time', 'material_file', 'number_of_student', 'instractour_id'];
$courseGroupWhere = array('course_id ='=>'3');
echo '<pre>';
//print_r($coursegroup->select($courseGroupData,$courseGroupWhere));
echo '</pre>';
//Insert..
$CoursegroupInsert = ['course_id'=>'4','course_total_hours'=>'180','course_session_days'=>'Sunday-Monday', 'course_from'=>'2019-12-01', 'course_to'=>'2019-12-01', 'course_from_time'=>'03:00:00', 'course_to_time'=>'07:00:00', 'material_file'=>'', 'number_of_student'=>'40', 'instractour_id'=>'3'];
//print_r($coursegroup->insert($CoursegroupInsert));
//Update..
$CoursegroupUpdate = ['course_total_hours'=>'130','course_session_days'=>'Sunday-Monday', 'course_from'=>'2019-12-01', 'course_to'=>'2019-12-01', 'course_from_time'=>'03:00:00', 'course_to_time'=>'07:00:00', 'material_file'=>'', 'number_of_student'=>'40', 'instractour_id'=>'3'];
$CoursegroupWhereUpdate = array('id'=>5);
echo '<pre>';
//print_r($coursegroup->update($CoursegroupUpdate,$CoursegroupWhereUpdate));
echo '</pre>';
//Delete..
$CoursegroupWhereDelete = array('id'=>5);
echo '<pre>';
//print_r($coursegroup->delete($CoursegroupWhereDelete));
echo '</pre>';
/* CourseGroupModel */

/* PaymentMethod */
$paymentmethod= new paymentmethodModel();

//Select Without where..
echo '<pre>';
//print_r($paymentmethod->Query());
echo '</pre>';
//Select..
$paymentmethodData = ['id', 'method_title'];
$paymentmethodWhere = array('method_title ='=>'cash');
echo '<pre>';
//print_r($paymentmethod->select($paymentmethodData,$paymentmethodWhere));
echo '</pre>';
//Insert..
$paymentmethodInsert = ['method_title'=>'installment'];
//print_r($paymentmethod->insert($paymentmethodInsert));
//Update..
$paymentmethodUpdate = ['method_title'=>'cash + installment'];
$paymentmethodWhereUpdate = array('id'=>3);
echo '<pre>';
//print_r($paymentmethod->update($paymentmethodUpdate,$paymentmethodWhereUpdate));
echo '</pre>';
//Delete..
$paymentmethodWhereDelete = array('id'=>3);
echo '<pre>';
//print_r($paymentmethod->delete($paymentmethodWhereDelete));
echo '</pre>';
/* PaymentMethod */

/* payment_student */
$paymentstudent= new paymentstudentModel();

//Select Without where..
echo '<pre>';
//print_r($paymentstudent->Query());
echo '</pre>';
//Select..
$paymentstudentData = ['id','payment_method','admin_id','student_id','amount'];
$paymentstudentWhere = array('payment_method ='=>'1');
echo '<pre>';
//print_r($paymentstudent->select($paymentstudentData,$paymentstudentWhere));
echo '</pre>';
//Insert..
$paymentstudentInsert = ['payment_method'=>'2','admin_id'=>'2','student_id'=>'3','amount'=>'750'];
//print_r($paymentstudent->insert($paymentstudentInsert));
//Update..
$paymentstudentUpdate = ['payment_method'=>'3','admin_id'=>'2','student_id'=>'4','amount'=>'950'];
$paymentstudentWhereUpdate = array('id'=>2);
echo '<pre>';
//print_r($paymentstudent->update($paymentstudentUpdate,$paymentstudentWhereUpdate));
echo '</pre>';
//Delete..
$paymentstudentWhereDelete = array('id'=>4);
echo '<pre>';
//print_r($paymentstudent->delete($paymentstudentWhereDelete));
echo '</pre>';
/* payment_student */

/*payment_refund*/
$paymentrefund= new paymentrefundModel();

//Select Without where..
echo '<pre>';
//print_r($paymentrefund->Query());
echo '</pre>';
//Select..
$paymentrefundData = ['id', 'admin_id', 'course_id', 'student_id', 'payment_id', 'refund', 'refund_reason', 'refund_date', 'refund_type'];
$paymentrefundWhere = array('refund ='=>'500');
echo '<pre>';
//print_r($paymentrefund->select($paymentrefundData,$paymentrefundWhere));
echo '</pre>';
//Insert..
$paymentrefundInsert = ['admin_id'=>'2', 'course_id'=>'2', 'student_id'=>'3', 'payment_id'=>'3', 'refund'=>'750', 'refund_reason'=>'Time reasoan', 'refund_date'=>'2019-12-18', 'refund_type'=>'All'];
//print_r($paymentrefund->insert($paymentrefundInsert));
//Update..
$paymentrefundUpdate = ['refund_date'=>'2019-12-18'];
$paymentrefundWhereUpdate = array('id'=>2);
echo '<pre>';
//print_r($paymentrefund->update($paymentrefundUpdate,$paymentrefundWhereUpdate));
echo '</pre>';
//Delete..
$paymentrefundWhereDelete = array('id'=>2);
echo '<pre>';
//print_r($paymentrefund->delete($paymentrefundWhereDelete));
echo '</pre>';
/*payment_refund*/