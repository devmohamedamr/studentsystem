<?php
require_once "core.php";
require_once "config.php";

class userlogModel implements core
{
    private $db;
    public function __construct()
    {
        global $dbMyConfig;
        $this->db = new PdoWrapper($dbMyConfig);
    }

    public function Query(){}
    public function select($data,$where){
        $res = $this->db->select('user_login',$data,$where)->results();

        if(count($res)>0){
            PDOHelper::PA($res);
            return"Login succeeded";
        }else{
            return "Check Your Username or Password";
        }

    }
    public function insert($data){
        $res=$this->db->insert('user_login',$data)->getLastInsertId();
        if($res>0){
            return "New Row ID Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function update($data,$where){
        $res = $this->db->update('user_login', $data, $where)->affectedRows();
        if($res>0){
            return "Number Of Rows Updated Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function delete($id){
        $res = $this->db->delete('user_login', $id)->affectedRows();
        if($res>0){
            return "Number Of Rows Deleted Is: ".$res;
        }else{
            return "Error";
        }
    }

}