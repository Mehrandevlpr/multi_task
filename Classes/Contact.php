<?php 


class Contact extends DataBaseConnected {
    protected static $table = 'contact';

    public function __construct($data){
      return  parent::__construct($data);
    }
}

?>