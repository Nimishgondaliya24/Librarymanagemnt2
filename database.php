<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"librarydb");
    if(!$conn){
        die('Could not Connect My Sql:'  );
    }
?>