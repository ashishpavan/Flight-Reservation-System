
<html>
    <head>
    <script src="https://kit.fontawesome.com/19dc701cbe.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="nav_bar">
            <div class="logo">
            <span>Air</span>Areceus
            </div>
            <?php if(isset($_SESSION['first_name'])):?>
                <div class="user_data">
                    <i class="fas fa-user" id="fas_1"></i>
                    <?php echo $_SESSION['username'];?>
                    <div class="drop_down">
                        <ul>
                            <li>Log-out</li>
                            <li>DashBoard</li>
                        </ul>
                    </div>
                </div>
            <?php else:?>
                <div class="user_data">
                        <i class="fas fa-user" id="fas_1"></i>
                        <div>Pavan Agarwal</div>
                        <div class="drop_down">
                            <ul>
                                <li><a href="Sign_up.php">Sign-up</a></li>
                                <li><a href="Login.php">Login</a></li>
                            </ul>
                    </div>
                </div>
            <?php endif?>
        </div>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
.nav_bar{
    margin-top: 10px;
    border:2px solid black;
    display: flex;
    justify-content:space-between;
    font-weight:bold;
    font-family: 'Montserrat', sans-serif;
    background:rgb(179, 26, 26);
    color:white;
    height:50px;
}
.nav_bar span{
    color:rgb(29, 162, 202);
}
.nav_bar .logo{
    margin-left:20px;
    padding-top:3px;
    width:170px;
    height:50px;
    font-size:30px;
    cursor:pointer;
}
.user_data{
    padding-top:10px;
    width:200px;
    position:relative;
    text-align:center;
    cursor:pointer;
}
.drop_down{
    position:absolute;
    top:46px;
    border: 2px solid black;
    background:rgb(175, 26, 26);
}
#fas_1{
    position:absolute;
    top:13px;
    left:-7px;
    width:50px;
    height:50px;
}
.drop_down ul{
    list-style:none;
}
.drop_down ul li{
    width: 200px;
    cursor:pointer;
    padding:5px;
}
a{
    text-decoration:none;
    color:white;
}
</style>
<script>
    const user_data=document.querySelector(".user_data");
    const dropdown=document.querySelector(".drop_down");
    dropdown.style.display="none";
    user_data.addEventListener("mouseover",()=>{
        dropdown.style.display="block";
});


user_data.addEventListener("mouseout",()=>{
    dropdown.style.display="none";
    console.log("mouseout");
});

</script>
</body>