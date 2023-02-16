<?php


include_once 'init.php';


include_once 'Classes/View.php';
// $contact=$cbd->get_contact('*',['LIMIT'=>10]);
$result=$cbd->add([
     'contact_name' => 'foo',
     'contact_phone' => '0915415151',
     'category' => 'food']);
$contact=$cbd->get_contact('*');
$file_path = BASE_PA . '/themes/' . ACTIVE_THEME . '/index.php';
include_once $file_path;


?>