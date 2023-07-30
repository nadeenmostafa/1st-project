<?php
session_start();

if(!($_SESSION['loggedin'])){
  header('location:login.php');
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
    
</body>
</html>



<?php


$data = file('customer.txt');
echo "<table class='table' border=' '>
<thead class='thead-dark'>
  <tr>
    <th>fname</th>
    <th>Email</th>
    <th>Profile Photo</th>
   
    <th> Edit </th>
    <th> Delete </th>

  </tr>
</thead>

"
;

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    echo "<tr>

        <td> $line[0] </td>
        <td> $line[1] </td>
        <td><input type='image' src='$line[2]' alt='Submit' width='100 px' > </td>
       
       
        <td><a href='edit.php?fname=$line[0]' > Edit </a></td>
        <td> <a href='delete.php?fname=$line[0]' > Delete </a> </td>
       

    </tr>
    
    ";

}

echo "</table>";
echo "<a href='logout.php' > Logout </a>
";