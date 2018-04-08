<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbName = 'bookshanks';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName);

    if(! $conn ){
       die('Could not connect: ' . mysqli_error());
    }

?>
