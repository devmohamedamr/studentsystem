<?php
require_once "core.php";
require_once "config.php";

class usertypeModel implements core
{
    private $db;
    public function __construct()
    {
        global $dbMyConfig;
        $this->db = new PdoWrapper($dbMyConfig);
    }
    public function Query(){
        $res = $this->db->pdoQuery("select * from `user_type`");

        if($res->aResults){
            return $res->aResults;
        }else{
            return null;
        }
    }
    public function select($data,$where){
        $res = $this->db->select('user_type',$data,$where)->results();

        if(count($res)>0){
            PDOHelper::PA($res);
        }else{
            return "Error";
        }
    }
    public function insert($data){
        $res = $this->db->insert('user_type',$data)->getLastInsertId();
        if($res>0){
            return "New Row ID Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function update($data,$where){
        $res = $this->db->update('user_type', $data, $where)->affectedRows();
        if($res>0){
            return "Number Of Rows Updated Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function delete($id){
        $res = $this->db->delete('user_type', $id)->affectedRows();
        if($res>0){
            return "Number Of Rows Deleted Is: ".$res;
        }else{
            return "Error";
        }
    }
}