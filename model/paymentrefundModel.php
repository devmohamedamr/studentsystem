<?php
/**
 * Created by PhpStorm.
 * User: W_S
 * Date: 2019-09-19
 * Time: 02:17 م
 */

class paymentrefundModel implements core
{
    private $db;
    public function __construct()
    {
        global $dbMyConfig;
        $this->db=new PdoWrapper($dbMyConfig);
    }
    public function Query(){
        $res = $this->db->pdoQuery("select * from `payment_refund`");

        if($res->aResults){
            return $res->aResults;
        }else{
            return null;
        }
    }
    public function select($data,$where){

            $res = $this->db->select('payment_refund',$data,$where)->results();

            if(count($res)>0){
                PDOHelper::PA($res);
            }else{
                return "Error";
            }
    }
    public function insert($data){
        $res = $this->db->insert('payment_refund',$data)->getLastInsertId();
        if($res>0){
            return "New Row ID Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function update($data,$where){
        $res = $this->db->update('payment_refund', $data, $where)->affectedRows();
        if($res>0){
            return "Number Of Rows Updated Is: ".$res;
        }else{
            return "Error";
        }
    }
    public function delete($id){
        $res = $this->db->delete('payment_refund', $id)->affectedRows();
        if($res>0){
            return "Number Of Rows Deleted Is: ".$res;
        }else{
            return "Error";
        }
    }
}