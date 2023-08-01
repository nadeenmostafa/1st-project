<?php
$newarr=array();
$newarr1=array();
$fname = $_GET['fname'];

$msql=new mysqli();
$msql -> connect('localhost','root','','newdb');
$query="select * from users where name=?";
$st=$msql -> prepare($query);
$st -> bind_param('s',$fname);
$st -> execute();
$result=$st -> get_result();
$line=$result -> fetch_all(MYSQLI_ASSOC);
$msql -> close();



$newarr['fname']=$line[0]['name'];
$newarr['email']=$line[0]['email'];
$newarr['pass']=$line[0]['pass'];
$newarr['room']=$line[0]['room'];
$newarr['ext']=$line[0]['ext'];
$newarr['image']=$line[0]['pp'];



$newarr1=json_encode($newarr);
header("location:h.php?data=$newarr1");
