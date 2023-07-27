<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['add'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$skills=$_POST['skills'];
$username=$_POST['uname'];
$pass=$_POST['pass'];
$dept=$_POST['dept'];
$code=$_POST['code'];
if($username==""||$fname==""||$lname==""||$pass==""||$code=="")
{
    header("Location:h.php");
    exit();

}
if($code!="Os2erdej")

{
    header("Location:h.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thanks <?php
    if($gender=='m'){
        echo "Mr.";
    }
    else{
        echo "Mrs.";
    }
    echo "$fname $lname";
    ?>
    </h1>
    <h2>Please review your information</h2> 
    <h3>
        Name:<?php echo "$fname $lname" ?><br>
        <br>
        Address:<?php echo "$address"?><br>
        <br>
        Your Skills:<?php
        foreach($skills as $key=>$value){
            echo "$value <br>";
        }?><br>
        <br>
        Department:<?php echo "$dept" ?>
        <br>
    </h3>

</body>
</html>