<?php
$hostname='localhost';
$username='root';
$password='';
$database='518a';
$conn=mysqli_connect($hostname,$username,$password,$database);
mysqli_query($conn,'set names "utf8"')
?>