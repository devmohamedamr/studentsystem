<?php


interface core{

    public function select();
    public function insert($data);
    public function update($data,$where);
    public function delete($id);

}