

<?php

include 'database.php';
$db=new Database();
$db -> connect('localhost','root','','newdb');
$line=$db -> select('users');



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
$db -> close();