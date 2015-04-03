<?php
$url = "http://localhost:8080/phpmyadmin/index.php?db=enkripsi&token=aea23722dd410ef800073f0aca26031b" ;
$host = "localhost";
$username = "root";
$password = "";
$database = "enkripsi";

$connect = mysql_connect($host, $username, $password);
mysql_select_db($database, $connect) or Die("MySQL Gagal Koneksi");
?>