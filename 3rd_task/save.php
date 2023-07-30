<?php

$errors = array();

if(!isset($_POST['fname']) or empty($_POST['fname'])){
    $errors['fname'] = 'First Name is required';
}

$imgname=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$ext=pathinfo($_FILES['image']['name'])['extension'];

if(!in_array($ext,['png','jpg'])){
    $errors['imagex']='not valid';
}

$email=$_POST['email'];
$confirm=strstr($email,"@gmail.com");
if( $confirm==""||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
    $errors['email']='invalid format';
}

if(empty($errors)){
    $imgnewname="images/".time().".".$ext;
    move_uploaded_file($tmpname,$imgnewname);
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $img=$imgnewname;

    $file = fopen('customer.txt', 'a');

    fwrite($file, "$fname:$email:$img\n");
    
    fclose($file);
    
    header('location:login.php');

}else{
    $errorsStr = json_encode($errors);
    header("location:h.php?errors=$errorsStr");
}