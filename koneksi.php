<?php

$server	= "localhost";
$user	= "root";
$pass	= "";
$db		= "dbsistemweb_201553023";


$koneksi = mysql_connect($server, $user, $pass, $db);

if ($koneksi) {

} else {
	echo "Koneksi Gagal";
}

mysql_select_db($db)
	or die ("Database Tidak Ada: ".mysql_error());

?>