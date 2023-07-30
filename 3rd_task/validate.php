<?php
$name=$_POST['fname'];
$email=$_POST['email'];
$data=file('customer.txt');

foreach ($data as $key => $value) {

    $line = explode(':', $value);
if(!strcasecmp($name,$line[0]) and !strcasecmp($email,$line[1]))
{
  
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['loggedin']=true;
    header('location:show.php');
    exit();
}
}
header('location:login.php');