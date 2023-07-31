

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

$msql=new mysqli();
$msql -> connect('localhost','root','','newdb');
$query="select * from users ";
$st=$msql -> prepare($query);
$st -> execute();
$result=$st -> get_result();
$line=$result -> fetch_all(MYSQLI_ASSOC);

for ($i=0; $i < count($line); $i++) { 

    echo "<tr>

        <td>". $line[$i]['name']." </td>
        <td>". $line[$i]['email']." </td>
        <td><input type='image' src='".$line[$i]['pp']."' alt='Submit' width='100 px' > </td>
       
       
        <td><a href='edit.php?fname=".$line[$i]['name'] ."'> Edit </a></td>
        <td> <a href='delete.php?fname=".$line[$i]['name']."' > Delete </a> </td>
       

    </tr>
    
    ";

}

echo "</table>";
$msql -> close();