<?php
define('HOST_NAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','application');
$con=new MySQLi(HOST_NAME,USERNAME,PASSWORD,DATABASE);
if(!$con)
	die("Error in connection".$con->connect_errno.$con->connect_error);

?>