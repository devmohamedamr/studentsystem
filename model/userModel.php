<?php
/**
 * Created by PhpStorm.
 * User: pc gamer
 * Date: 24/08/2019
 * Time: 12:41 م
 */

require_once "core.php";
require_once "config.php";

class userModel implements core
{

    private $db;

    public function __construct()
    {
        global $dbMyConfig;
        $this->db = new PdoWrapper($dbMyConfig);
    }

    public function Query()
    {

        $res = $this->db->pdoQuery("select * from `user`");

        if($res->aResults){
            return $res->aResults;
        }else{
            return null;
        }
    }

    public function select($data,$where){}
    public function insert($data)
    {
        $res = $this->db->insert("user",$data)->getLastInsertId();

        if($res > 0){
            echo "insert done";
        }else{
            echo "error";
        }
    }

    public function update($data,$where)
    {

        $res = $this->db->update("user",$data,$where)->affectedRows();
        if($res>0){
            echo "updated";
        }else{
            echo "error";
        }
    }

    public function delete($where)
    {
        $res = $this->db->delete("user",$where)->affectedRows();
        if($res>0){
            echo "delete";
        }else{
            echo "error";
        }
    }

}