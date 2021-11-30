<?php

$_SERVER = "localhost";
$username = "root";
$password = "";
$db= "demo";

$conn = new mysqli($_SERVER,$username,$password,$db);
if(! $conn){
    die("Connection failed:" . mysqli_connect_error());
}