<?php


interface core{

    public function Query();
    public function select($data,$where);
    public function insert($data);
    public function update($data,$where);
    public function delete($id);

}