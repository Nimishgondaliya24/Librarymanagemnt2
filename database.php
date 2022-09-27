<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"librarydb") or die("Connection Failed");
    // if(!$conn){
    //     die('Could not Connect My Sql:'  );
    // }
?>