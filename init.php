<?php

include_once 'Utilites/Constanse.php';
if(IS_DEV_MODE){
    error_reporting(E_ALL);
    ini_set('dispaly_errors', 1);
}
include_once 'vendor/autoload.php';




include_once BASE_PA . 'DB/DataBaseConnection.php';
include_once BASE_PA . 'Classes/Contact.php';
include_once BASE_PA . 'Utilites/helper.php';



$dsn=get_config('db');
var_dump($dsn);
try{
    $cbd = new Contact($dsn);
}catch(Exception $e){
    echo $e->getMessage();
}





// $database = new Medoo(
//    'db'=> [
//     'type' => 'mysql',
//     'host' => 'localhost',
//     'database' => 'name',
//     'username' => 'your_username',
//     'password' => 'your_password',
 
//     // [optional]
//     'charset' => 'utf8mb4',
//     'collation' => 'utf8mb4_general_ci',
//     'port' => 3306,

//     // [optional] The table prefix. All table names will be prefixed as PREFIX_table.
//     'prefix' => 'PREFIX_',

//     // [optional] To enable logging. It is disabled by default for better performance.
//     'logging' => true,

//     // [optional]
//     // Error mode
//     // Error handling strategies when the error is occurred.
//     // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
//     // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
//     'error' => PDO::ERRMODE_SILENT,

//     // [optional]
//     // The driver_option for connection.
//     // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
//     'option' => [
//         PDO::ATTR_CASE => PDO::CASE_NATURAL
//     ],

//     // [optional] Medoo will execute those commands after the database is connected.
//     'command' => [
//         'SET SQL_MODE=ANSI_QUOTES'
//     ]
// ]);




?>
