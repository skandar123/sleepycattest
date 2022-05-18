<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sleepycat";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die('Error in connection');
}
?>