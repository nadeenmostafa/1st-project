<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="">
   <form action="index.php" method="POST">
    <tr><td><label for="">First name</label></td>
    <td><input type="text" name="fname" required ></td></tr>
    <tr><td><label for="">Last name</label></td>
    <td><input type="text" name="lname"></td></tr>
    <tr><td><label for="">Address</label></td>
    <td><textarea name="add" cols=30 rows="10" ></textarea></td></tr>
    <tr>
        <td> <label for="country">country:</label><br></td>
        <td> <select name="country" id="country" >
            <option value="egy">Egypt</option>
            <option value="eng">England</option>
          </select></td> 
      </tr>
      <tr>
        <td> <label for="Gender">Gender:</label><br></td>
        <td><input type="radio"  name="gender" value="m"required>
            <label for="Male">Male</label><br>
            <input type="radio" name="gender" value="f"required>
            <label for="female">Female</label><br></td>
        
      </tr>
      <tr>
        <td> <label for="fav" >Skills:</label><br></td>
        <td><input type="checkbox"  name="skills[]" value="PHP">
            <label for=""> PHP</label>
            <input type="checkbox"  name="skills[]" value="J2SE">
            <label for=""> J2SE</label><br>
            <input type="checkbox" name="skills[]" value="MYSQL">
            <label for=""> MySQL</label>
            <input type="checkbox"  name="skills[]" value="POSTGREESQL">
            <label for=""> postgreesql</label>
      </tr>
      <tr><td><label for="">Username</label></td>
      <td><input type="text" name="uname"required ></td></tr>
      <tr><td><label for="">Password</label></td>
      <td><input type="text" name="pass" required></td></tr>
      <tr><td><label for="">Department</label></td>
      <td><input type="text" name="dept" placeholder="opensource" ></td></tr>
      <tr>
        <th colspan="2">Os2erdej <br>
        <input type="text" name="code" required> <br>
        <input type="submit" value="submit">
        <button type="button" >Reset</button></th>
        
      </tr>
      
   </form>
</table>
</body>
</html>