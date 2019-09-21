<?php
class courseModel implements core
{
    private $db;
    public function __construct()
    {
        global $dbMyConfig;
        $this->db=new PdoWrapper($dbMyConfig);
    }

    public function Query(){
        $res = $this->db->pdoQuery("select * from `course`");

        if($res->aResults){
            return $res->aResults;
        }else{
            return null;
        }
    }
    public function select($data,$where){
        $res = $this->db->select('course',$data,$where)->results();

        if(count($res)>0){
            PDOHelper::PA($res);
        }else{
            return "Error";
        }
    }
    public function insert($data){
        $res = $this->db->insert('course',$data)->getLastInsertId();
        if($res>0){
            return "New Row ID Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function update($data,$where){
        $res = $this->db->update('course', $data, $where)->affectedRows();
        if($res>0){
            return "Number Of Rows Updated Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function delete($id){
        $res = $this->db->delete('course', $id)->affectedRows();
        if($res>0){
            return "Number Of Rows Deleted Is: ".$res;
        }else{
            return "Error";
        }

    }
}