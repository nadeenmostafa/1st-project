<?php

$fname = $_GET['fname'];
$msql=new mysqli();
    $msql -> connect('localhost','root','','newdb');
    $query="delete from users where name=?";
    $st=$msql -> prepare($query);
    $st -> bind_param('s',$fname);
    $st -> execute();
    $msql -> close();

header('location:show.php');

