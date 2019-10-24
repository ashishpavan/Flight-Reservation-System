<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>database connection</title>
</head>
<body>
    <p>
        Php Tutorial
    </p>
</body>
</html>
<?php
$host='localhost:3307';
$user="root";
$password="";
$database_name="product";

$conn=mysqli_connect($host,$user,$password,$database_name);
if(!mysqli_connect_error())
{
    echo "<h>connection succeded</h><script>
    console.log('Hello');</script>";
    $sqlquery1="insert into products values(6,'phone',2677.0)";
    $sqlquery2="
    create table student(
    student_id int primary key,
    student_name varchar(255) not null,
    age int check (age <20) not null
    );
    ";
    $result=$conn->query($sqlquery1);
    if($result)
    {
        echo "hey boy u just created a new table";
    }
    else{
        echo "unsuccesful";
    }



}



?>