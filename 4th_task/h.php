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
   <form action="save.php" method="POST" enctype="multipart/form-data">
    <tr><td><label for="">Name</label></td>
    <td><input type="text" name="fname"  value="<?php if(isset($arrdata['fname'])){echo $arrdata['fname'];}  ?>"><br>
    <span> <?php if(isset($arrErrors['fname'])){echo $arrErrors['fname'];}  ?> </span></td></tr>

    <!-- <tr><td><label for="">Last name</label></td>
    <td><input type="text" name="lname"value="// if(isset($arrdata['lname'])){echo $arrdata['lname'];}  ?>"><br>
    <span>//php if(isset($arrErrors['lname'])){echo $arrErrors['lname'];}  ?> </span></td></tr> -->

    <!-- <tr><td><label for="">Address</label></td>
    <td><textarea name="add" cols=30 rows="10" placeholder="//if(isset($arrdata['add'])){echo $arrdata['add'];}  ?>"></textarea><br>
    <span>//if(isset($arrErrors['add'])){echo $arrErrors['add'];}  ?> </span></td></tr> -->

    <!-- <tr> 
        <td> <label for="country">country:</label><br></td>
        <td> <select name="country" id="country" >
        <option value=""></option>
            <option value="egy" >Egypt</option>
            <option value="eng">England</option>
          </select></td> 
      </tr> -->
      <!-- <tr>
        <td> <label for="Gender">Gender:</label><br></td>
        <td><input type="radio"  name="gender" value="m" value="// if(isset($arrdata['gender'])&&$arrdata['gender']=='m') {echo $arrdata['gender'];} ?>">
            <label for="Male">Male</label><br>
            <input type="radio" name="gender" value="f" value=" if(isset($arrdata['gender'])&&$arrdata['gender']=='f'){echo $arrdata['gender'];}?>">
            <label for="female">Female</label><br>
            <span>  if(isset($arrErrors['gender'])){echo $arrErrors['gender'];}  ?> </span></td>

      </tr> -->
      <!-- <tr>
        <td> <label for="fav" >Skills:</label><br></td>
        <td><input type="checkbox"  name="skills[]" >
            <label for=""> PHP</label>
            <input type="checkbox"  name="skills[]" >
            <label for=""> J2SE</label><br>
            <input type="checkbox" name="skills[]" >
            <label for=""> MySQL</label>
            <input type="checkbox"  name="skills[]" >
            <label for=""> postgreesql</label>
      </tr> -->
      <tr><td><label for="">Email</label></td>
      <td><input type="text" name="email"required  value="<?php if(isset($arrdata['email'])){echo $arrdata['email'];} ?>"> <br>
      <span> <?php if(isset($arrErrors['email'])){echo $arrErrors['email'];}  ?> </span></td></tr>

      <tr><td><label for="">Password</label></td>
      <td><input type="text" name="pass" required  value="<?php if(isset($arrdata['pass'])){echo $arrdata['pass'];}  ?>"></td></tr>
      <tr><td><label for="">Confirm Password</label></td>
      <td><input type="text" name="cpass" value="" ></td></tr>
      <tr> 
        <td> <label for="room">Room No:</label><br></td>
        <td> <select name="room" id="room" >
        <option value="<?php if(isset($arrdata['room'])){echo $arrdata['room'];}  ?>"></option>
            <option value="app1" >Application1</option>
            <option value="app2" >Application2</option>
            <option value="cloud">Cloud</option>
          </select></td> 
      </tr>
      <tr><td><label for="">Ext</label></td>
      <td><input type="text" name="ext" value="<?php if(isset($arrdata['ext'])){echo $arrdata['ext'];}  ?>" ></td></tr>
      <tr><td><label for="">Profile Photo</label></td>
      <td><input type="file" name="image" id="" value="<?php if(isset($arrdata['image'])){echo $arrdata['image'];}  ?>"></td></tr>
      <tr>
        <th colspan="2"> <input type="submit" value="submit">
        <button type="button" >Reset</button></th>
       
      </tr>
      
   </form>
</table>
</body>
</html>