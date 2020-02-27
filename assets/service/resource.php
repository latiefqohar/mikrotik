<?php
$ip= $_POST['ip'];
$login = $_POST['login'];
$password = $_POST['password'] ;
require('routeros_api.class.php');

$API = new routeros_api();

$API->debug = false;

if ($API->connect($ip, $login, $password)) {   // Change this as necessery

$ARRAY = $API->comm("/system/resource/print");
echo json_encode($ARRAY);
   $API->disconnect();

}

?>