<?php include("header.php");
 include("x.php");
$airline_name=[];
$source=[];
$destination=[];
$price_economy=[];
$price_business=[];
$business_cap=[];
$economy_cap=[];
?>

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<div class="database_data">
    <?php foreach($_SESSION['result'] as $data ):?>
        <?php foreach($data as $key=> $value):?>
        <?php if($key === 'airline_name'){$airline_name=$value;};?>
        <?php if($key === 'source'){$source=$value;};?>
        <?php if($key === 'destination'){$destination = $value;};?>
        <?php if($key === 'price_economy'){$price_economy = $value;};?>
        <?php if($key === 'price_business'){$price_business = $value;};?>
        <?php if($key === 'business_cap'){$business_cap = $value;};?>
        <?php if($key === 'economy_cap'){$economy_cap= $value;};?>
        <?php endforeach?>

    <form action="x.php" method="post">
        <div class="post">
            <img src="images/<?php echo $airline_name?>.jpg">
            <div class="source_post" name="source">Source:  <?php echo $source?> </div>
            <div class="dest_post" name="destination">Destination:  <?php echo $destination?></div>
            <div class="price_economy name="price_economy">Economy-price:  <?php echo $price_economy?></div>
            <div class="price_business" name="price_business">Business-price:  <?php echo $price_business?></div>
            <div class="class">
            <input type="radio" name="class" class="travel_option">Business<br>
            <input type="radio" name="class" class="travel_option">Economy
            </div>
            <div class="seats_economy">Economy Seats:<?php echo $business_cap?></div>
            <div class="seats_business">Business Seats:<?php echo $economy_cap."<br>"?></div>
            <button class="submit" type="submit">
            Book now
            </button>
            </div>
        </form>
    <?php endforeach?>
</div>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .database_data{
        font-family: Montserrat, sans-serif;
        background:rgb(235, 84, 73);
        margin:50px auto;
        color:white;
        border-radius: 20px;
        width:85%;
    }
    .post{
        display:flex;
        position:relative;
        margin-top:50px;
    }
    .post div{
    }
    .post img{
        width:120px;
        height:100px;
    }
    .submit{
        position:absolute;
        top:75px;
        left:50%;
        transform:translateX(-50%);
        background:rgb(29, 162, 202);
        width: 200px;
        height: 50px;
        border-radius: 10px;
        text-align:center;
        padding-top:7px;
        font-size:25px;
        cursor:pointer;

    }
    .class{
        margin-right:10px;
        width:90px;
    }
</style>
