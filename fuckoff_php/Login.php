<?php
include("./database/db.php");
include("./controller/check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/19dc701cbe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<body>
    <h1>
        Log-in
    </h1>
    <form action="Login.php" method="POST">
    <div class="main_content">
        <div class="field-name">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Firstname" name="first_name" class="Firstname" required>
        </div>
        <div class="field-password">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="submit">
            <i class="fas fa-arrow-right"></i>            
            <input type="submit" name="Submit" id="submit" >
        </div>
    </div>
    </form>
    
</body>
</html>