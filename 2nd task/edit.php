<?php
$newarr=array();
$newarr1=array();
$fname = $_GET['fname'];

$data = file('customer.txt');

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    if($fname == $line[0]){
     $newarr['fname']=$line[0];
     $newarr['lname']=$line[1];
     $newarr['add']=$line[2];
     $newarr['gender']=$line[3];
     $newarr['country']=$line[4];
     $newarr['uname']=$line[5];
     $newarr['pass']=$line[6];
     $newarr['dept']=$line[7];
    
     break;
    }

}
$newarr1=json_encode($newarr);
header("location:h.php?data=$newarr1");
