<?php

$errors = array();

if(!isset($_POST['fname']) or empty($_POST['fname'])){
    $errors['fname'] = 'First Name is required';
}
if(!isset($_POST['lname']) or empty($_POST['lname'])){
    $errors['lname'] = 'Last Name is required';
}
if(!isset($_POST['gender']) or empty($_POST['gender'])){
    $errors['gender'] = 'Gender is required';
}
if(!isset($_POST['add']) or empty($_POST['add'])){
    $errors['add'] = 'Address is required';
}



if(empty($errors)){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $add = $_POST['add'];
    $gender = $_POST['gender'];
    $country=$_POST['country'];
    $skills=$_POST['skills'];
    $username=$_POST['uname'];
    $pass=$_POST['pass'];
    $dept=$_POST['dept'];
    $code=$_POST['code'];
    $file = fopen('customer.txt', 'a');

    fwrite($file, "$fname:$lname:$add:$gender:$country:$username:$pass:$dept\n");
    
    fclose($file);
    
    header('location:show.php');

}else{
    $errorsStr = json_encode($errors);
    header("location:h.php?errors=$errorsStr");
}