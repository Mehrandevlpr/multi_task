<?php

use Medoo\Medoo;

interface CRUD_WORK
{
    public  function add($new_contact);
    public  function get_contact($colums, $where);
    public function update_contact($data, $where);
    public function delete_contact($where);
}
class DataBaseConnected extends Medoo implements CRUD_WORK{
    protected static $table;
    public static $primary_key='id';
    public function __construct(array $data){
       parent::__construct($data);
    }
    public  function add($new_contact)
    {
         $data=$this->insert(static::$table, $new_contact);
        return $data->rowCount();
    }
    public  function get_contact($colums, $where=null)
    {
        return $this->select(static::$table, $colums, $where=null);
    }
    public  function update_contact($data, $where)
    {
        $data=$this->update(static::$table, $data, $where);
        return $data->rowCount();
    }
    public   function delete_contact($where)
    {
        return $this->delete(static::$table, $where);
    }
}