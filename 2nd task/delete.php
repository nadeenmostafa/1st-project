<?php

$fname = $_GET['fname'];

$data = file('customer.txt');

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    if($fname == $line[0]){
        unset($data[$key]);
        break;
    }

}


$file = fopen('customer.txt', 'w');

foreach ($data as $key => $value) {

    fwrite($file, $value);

}

fclose($file);

header('location:show.php');

