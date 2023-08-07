<?php
include_once "db_connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="">
    <input type="text" name="f_name" max=20 placeholder="first_name"><br>
    <input type="text" name="m_name" placeholder="middle_name"><br>
    <input type="text" name="l_name" placeholder="last_name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <input type="submit" name="submit" ><br>
    </form>
</body>
</html>