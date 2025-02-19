<?php
$servername = "localhost";
$username= "root";
$dbname = "newdb";
$dbpassword = "";

$conn= new mysqli ($servername, $username, $dbpassword,$dbname);
if(!$conn)
{
    echo"error";
}
else{
    echo"connected successfully";
}
?>