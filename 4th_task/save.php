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
    $pass=$_POST['pass'];
    $ext=$_POST['ext'];
    $room=$_POST['room'];
    $img=$imgnewname;

    $msql=new mysqli();
    $msql -> connect('localhost','root','','newdb');
    $query="select * from users where name=?";
    $st=$msql -> prepare($query);
    $st -> bind_param('s',$fname);
    $st -> execute();
    $result=$st -> get_result();
   $data=$result -> fetch_all(MYSQLI_ASSOC);
   
    if($data==NULL)
    {
        
        $query="insert into users (name,email,pass,room,ext,pp) values(?,?,?,?,?,?)";
        $st=$msql -> prepare($query);
        $st -> bind_param('ssssss',$fname,$email,$pass,$room,$ext,$img);
        $st -> execute();
    }
    else{

        $query="update users set email=? , pass=? , room=? , ext=? ,pp=? where name=?";
        $st=$msql -> prepare($query);
        $st -> bind_param('ssssss',$email,$pass,$room,$ext,$img,$fname);
        $st -> execute();
    
    
}
    $msql -> close();

    header('location:show.php');
    exit();

}else{
    $errorsStr = json_encode($errors);
    header("location:h.php?errors=$errorsStr");
}