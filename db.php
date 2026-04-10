<?php
//db credentials
$servername="localhost";
$username="root";
$password="Dhanush@2004";
$dbname="art_db";
//$port="3306";//->if there is a change in the port number

//creating connection
$conn=mysqli_connect($servername,$username,$password,$dbname);//to connect with db

//checking mysql connection
if(!$conn)
    {
        die("connection failed".mysqli_connect_error());//mysqli_connect_error()-gives the error when connection
    }
    else{
        echo "<h1 style='text-align:center'>connected successfully</h1>";
    }
?>