<?php
include 'database.php';


$db=new databse();
$db -> connect('localhost','root','','newdb');
$fname = $_GET['fname'];
$db->delete($fname,$tablename);
$db -> close();

header('location:show.php');

