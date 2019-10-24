<?php

$host="localhost:3307";
$user="root";
$password="";
$db_name="flight_reservation";

$conn=new mysqli($host,$user,$password,$db_name);

if($conn->connect_errno)
{
    echo "<h1>error</h1>";
    exit();
}

