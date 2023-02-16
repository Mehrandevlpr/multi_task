<?php 

function asset($style){
   return B_URL.'/themes'.'/'.ACTIVE_THEME."/$style";
}
function site_url($url)
{
   return B_URL . $url;
}
function isPostRequest()
{
   return ($_SERVER['REQUEST_METHOD'] == 'POST');
}
function isGetRequest()
{
   return ($_SERVER['REQUEST_METHOD'] == 'GET');
}

function get_config($key)
{
   $configs=array(
      "db"=> [
         // [required]
         'database_type' => 'mysql',
         'server' => 'localhost',
         'database_name' => 'contact-phonebook',
         'username' => 'root',
         'password' => '',

         // [optional]
         'charset' => 'utf8mb4',
         'collation' => 'utf8mb4_general_ci',
         'port' => 3306,

         // // [optional] The table prefix. All table names will be prefixed as PREFIX_table.
         // 'prefix' => 'PREFIX_',

         // [optional] To enable logging. It is disabled by default for better performance.
         'logging' => true,
         // [optional]
         // Error mode
         // Error handling strategies when the error is occurred.
         // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
         // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
         'error' => PDO::ATTR_ERRMODE,

         // [optional]
         // The driver_option for connection.
         // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
         'options' => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL
         ],

         // [optional] Medoo will execute those commands after the database is connected.
         'command' => [
            'SET SQL_MODE=ANSI_QUOTES'
         ]
      ],
      "notification"=>[
         // message for example
      ]
   );
   return $configs[$key];
}