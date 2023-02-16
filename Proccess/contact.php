<?php

include_once '../init.php';


$withe_list = ['add', 'remove', 'select', 'update'];
$action=$_POST['action'];
if (isPostRequest() && in_array($action, $withe_list)) {
    switch ($action) {
        case 'add':
            $contact =
                array(
                    'contact_name' => $_POST['contact_name'],
                    'contact_phone' => $_POST['contact_phone'],
                    'category' => $_POST['surname']
                );
                
            if($cbd->add($contact)){
                echo "Add Successfully";
                header("Location:../index.php");
                die();
            }else{
                echo "Error to add user";
            }
            break;
        case 'remove':
            $cbd->delete_contact(['id'=>$_POST['id']]);
            header("Location:../index.php");
            die();
            break;
        case 'select':

            break;
        case 'update':

            break;
        default:
            echo 'action is not impeliment';
    }
}














?>