<?php 
$db_host = "127.0.0.1";
$db_user = "root";
$db_name = "multiuser";

$koneksi = mysqli_connect($db_host,$db_user);
$db = mysqli_select_db($koneksi, $db_name);

?>