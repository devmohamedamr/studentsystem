<?php

require_once "core.php";
require_once "config.php";
class courseCategoryModel implements core
{
    private $db;
    public function __construct()
    {
        global $dbMyConfig;
        $this->db = new PdoWrapper($dbMyConfig);
    }
    public function Query(){}
    public function select($data,$where){
       $res = $this->db->select('course_category',$data,$where)->results();

        if(count($res)>0){
            PDOHelper::PA($res);
        }else{
            return "Error";
        }

    }
    public function insert($data){
        $res = $this->db->insert('course_category',$data)->getLastInsertId();
        if($res>0){
            return "New Row ID Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function update($data,$where){
        $res = $this->db->update('course_category', $data, $where)->affectedRows();
        if($res>0){
            return "Number Of Rows Updated Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function delete($id){

        $res = $this->db->delete('course_category', $id)->showQuery()->affectedRows();
        if($res>0){
            return "Number Of Rows Deleted Is: ".$res;
        }else{
            return "Error";
        }
    }

}