<?php
 include ("./database/db.php");
 include("controller/user.php");
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
        Sign-up
    </h1>
    <form action="Sign_up.php" method="POST">
    <div class="main_content">
        <div class="errors">
        <?php if(count($errors)>0):?>
        <?php echo"User_name already taken<style> .errors{display:block}</style>"?>
        <?php endif;?>
        </div>
        <div class="field-name">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Firstname" name="first_name" class="Firstname" required <?php if($bool_error===1):?>value=<?php echo $firstname?><?php endif;?>>
            <input type="text" placeholder="Middlename" name="middle_name" class="Middlename" required <?php if($bool_error===1):?>value=<?php echo $middlename?><?php endif;?>>
            <input type="text" placeholder="Lastname" name="last_name" class="Lastname" required <?php if($bool_error===1):?>value=<?php echo $lastname?><?php endif;?>>
        </div>
        <div class="field-email">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="Email" required <?php if($bool_error===1):?>value=<?php echo $Email?><?php endif;?>>
        </div>
        <div class="field-phone">
            <i class="fas fa-phone-alt" ></i>            
            <input type="text" placeholder="Phone number"  name="phone" required <?php if($bool_error===1):?>value=<?php echo $phone?><?php endif;?>>
        </div>
        <div class="field-password">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" name="password" required <?php if($bool_error===1):?>value=<?php echo $firstname?><?php endif;?>>
        </div>
       
        <div class="submit">
            <i class="fas fa-arrow-right"></i>            
            <input type="submit" name="Submit" id="submit" >
        </div>
    </div>
    </form>
    
</body>
</html>