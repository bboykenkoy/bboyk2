<?php
	$host = "127.2.102.2:3306";
	$database = "ninhbinhpro";
	$user = "adminmKPpdkc";
	$pass = "anhthanh";
	$connect = mysql_connect($host,$user,$pass)or die("Không thể kết nối đến Database !");
	mysql_select_db($database);
?>