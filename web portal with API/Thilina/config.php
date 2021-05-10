<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "blog1";

$connection = mysqli_connect($server,$username,$password,$database);

if($connection==FALSE)
{
    echo (mysqli_connect_error());
}