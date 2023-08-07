<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="css/style_payment.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
</head>
<body>
    <div class="wrapper">
        <div class="payment">
            <div class="payment-logo">
                <p>P</p>
            </div>
            <h2>Payment Gateway</h2>
            <div class="form">
                <form action="preloader_code.php" method="post">
                    <div class="card space icon-relative">
                    <label class="label">Card holder:</label>
                    <input type="text" placeholder="Coding Market" class="input"> 
                    <i class="fas fa-user"></i>  
                    </div>
                    <div class="card space icon-relative">
                    <label class="label">Card Number:</label>
                    <input type="text" placeholder="Card Number" class="input">   
                    <i class="far fa-credit-card"></i>
                    </div>
                    <div class="card-grp space">
                        <div class="card-item icon-relative">
                        <label class="label">Expiry date:</label>
                        <input type="text" placeholder="00 / 00" class="input">  
                        <i class="far fa-calendar-alt"></i> 
                        </div>
                        <div class="card-item icon-relative">
                        <label class="label">CVC</label>
                        <input type="text" placeholder="000" class="input">
                        <i class="fas fa-lock"></i>   
                        </div>
                    </div>
                    <button type="submit" class="submit btn" style="width:100%;font-family:Montserrat;font-size:25px;color:white;">
                        PAY
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>