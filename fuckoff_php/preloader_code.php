<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>preloader</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<style>
.preloader {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width:100%;
    height:100%;
}
h2{
    display:block;
    position:absolute;
    left:50%;
    top:20%;
    transform:translateX(-50%);
    font-family: 'Montserrat', sans-serif;
}
.circle{
    border: 3px solid transparent;
    border-top-color:#e74c3c;
    width:150px;
    height:150px;
    position: relative;
    top: 50%;
    left: 50%;
    margin:-75px 0px 0px -75px;
    animation: spin 2s linear infinite;
    z-index: 1500;
    }
.inner-circle{
    border: 3px solid transparent;
    border-top-color:#f9c922;
    position:absolute;
    top:5px;
    left:5px;
    right:5px;
    bottom:5px;
    animation: spin 3s linear infinite;

}
.innermost-circle{
    border: 3px solid transparent;
    border-top-color:#3498db;
    position:absolute;
    top:15px;
    left:15px;
    right:15px;
    bottom:15px;
    animation: spin 1.5s linear infinite;
}
.border{
    border-radius:50%;
}

@keyframes spin{
    from{
        transform:rotate(0deg);
    }
    to{
        transform:rotate(360deg);
    }
}

</style>
<body>
<div class="preloader">
    <h2>Transaction in process...</h2>
    <div class="border circle">
            <div class="border inner-circle">
            </div>
            <div class="border innermost-circle">
            </div>
    </div>
    <?php for($x=0;$x<=100000;$x++):?>
    <?php endfor?>
    <?php sleep(2);?>
    <?php echo"Transaction done";?>
    <form action="index1.php" method="post">
        <button type="submit" name="btn">Home Page here</button>
    </form>
    <?php if(isset($_POST['btn']))
    {
        header("Location: http://localhost/fuckoff_php/index1.php");
        exit();
    }
    ?>
</div>
    
</body>
</html>
