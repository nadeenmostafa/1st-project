<?php

if(isset($_GET['data'])){
    $arrdata = json_decode($_GET['data'], true);
}
if(isset($_GET['errors'])){
  $arrErrors = json_decode($_GET['errors'], true);
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
    <table border="">
   <form action="save.php" method="POST">
    <tr><td><label for="">First name</label></td>
    <td><input type="text" name="fname"  value="<?php if(isset($arrdata['fname'])){echo $arrdata['fname'];}  ?>"><br>
    <span> <?php if(isset($arrErrors['fname'])){echo $arrErrors['fname'];}  ?> </span></td></tr>

    <tr><td><label for="">Last name</label></td>
    <td><input type="text" name="lname"value="<?php if(isset($arrdata['lname'])){echo $arrdata['lname'];}  ?>"><br>
    <span> <?php if(isset($arrErrors['lname'])){echo $arrErrors['lname'];}  ?> </span></td></tr>

    <tr><td><label for="">Address</label></td>
    <td><textarea name="add" cols=30 rows="10" placeholder="<?php if(isset($arrdata['add'])){echo $arrdata['add'];}  ?>"></textarea><br>
    <span> <?php if(isset($arrErrors['add'])){echo $arrErrors['add'];}  ?> </span></td></tr>

    <tr>
        <td> <label for="country">country:</label><br></td>
        <td> <select name="country" id="country" >
        <option value=""></option>
            <option value="egy" >Egypt</option>
            <option value="eng">England</option>
          </select></td> 
      </tr>
      <tr>
        <td> <label for="Gender">Gender:</label><br></td>
        <td><input type="radio"  name="gender" value="m" value="<?php if(isset($arrdata['gender'])&&$arrdata['gender']=='m') {echo $arrdata['gender'];} ?>">
            <label for="Male">Male</label><br>
            <input type="radio" name="gender" value="f" value="<?php if(isset($arrdata['gender'])&&$arrdata['gender']=='f'){echo $arrdata['gender'];}?>">
            <label for="female">Female</label><br>
            <span> <?php if(isset($arrErrors['gender'])){echo $arrErrors['gender'];}  ?> </span></td>

      </tr>
      <tr>
        <td> <label for="fav" >Skills:</label><br></td>
        <td><input type="checkbox"  name="skills[]" >
            <label for=""> PHP</label>
            <input type="checkbox"  name="skills[]" >
            <label for=""> J2SE</label><br>
            <input type="checkbox" name="skills[]" >
            <label for=""> MySQL</label>
            <input type="checkbox"  name="skills[]" >
            <label for=""> postgreesql</label>
      </tr>
      <tr><td><label for="">Username</label></td>
      <td><input type="text" name="uname"required  value="<?php if(isset($arrdata['uname'])){echo $arrdata['uname'];}  ?>"></td></tr>
      <tr><td><label for="">Password</label></td>
      <td><input type="text" name="pass" required  value="<?php if(isset($arrdata['pass'])){echo $arrdata['pass'];}  ?>"></td></tr>
      <tr><td><label for="">Department</label></td>
      <td><input type="text" name="dept" value="<?php if(isset($arrdata['dept'])){echo $arrdata['dept'];}  ?>" ></td></tr>
      <tr>
        <th colspan="2">Os2erdej <br>
        <input type="text" name="code" > <br>
        <input type="submit" value="submit">
        <button type="button" >Reset</button></th>
        
      </tr>
      
   </form>
</table>
</body>
</html>