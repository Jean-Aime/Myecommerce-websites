<?php
define('DB_SERVER','localhost');
define('DB_USER','sabranob_user');
define('DB_PASS','12@Annibae34/');
define('DB_NAME','sabranob_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>