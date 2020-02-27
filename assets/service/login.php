<?php

require('routeros_api.class.php');

$ip= $_POST['ip'];
$login = $_POST['login'];
$password = $_POST['password'] ;

$API = new routeros_api();

$API->debug = false;

if ($API->connect($ip, $login, $password)) {      // Change this as necessery


 $API->write('/interface/wireless/registration-table/print',false);
 $API->write('=count-only=');

   $READ = $API->read(false);
   $ARRAY = $API->parse_response($READ);
   echo json_encode($ARRAY);

   $API->disconnect();

}

?>