<?php 
include("database/db_connection.php"); 
include("database/db.php");
include("search.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Flight website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/19dc701cbe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style_1.css">
</head>

<body>
    <?php include("./header.php")?>
    <div class="cont_1">
    <form action="index1.php" method="post">    
    <div class="nav">
            <div> Flights </div>
            <div> Hotels </div>
            <div> Holidays </div>
            <div> Visa </div>
            <div> Cabs </div>
            <div> Giftcards </div>
            
        </div>
        <div class="trip_way">
            <label for="trip_way">
            <input type="radio" name="trip_way" value="ONEWAY" id="trip_way">ONEWAY
            <input type="radio" name="trip_way" value="ROUNDTRIP" id="trip_way">ROUNDTRIP
            <input type="radio" name="trip_way" value="MULTICITY" id="trip_way">MULTI-CITY
            </label>
        </div> 
        <div class="flight_details">
            <div class="from">
                <p>From</p>
                <h2 id="h2_1">MUMBAI</h2>
                <div class="from_dropdown">
                    <select name="source" id="select_1">
                        <?php $result=selectAll('flight_list')?>
                        <?php $arr=array()?>
                        <?php foreach($result as $data):?>
                            <?php foreach($data as $key=>$value):?>
                                <?php if($key==='source'):?>
                                <?php array_push($arr,$value);?>
                                <?php endif?>
                            <?php endforeach?>
                        <?php endforeach?>
                        <?php $arr=array_unique($arr)?>
                        <?php foreach($arr as $key=>$value):?>
                            <option value="<?php echo $value?>"><?php echo "$value"?></option>
                        <?php endforeach?>
                    </select>
                    <!--<div>Pune</div>
                    <div>Ahemdabad</div>
                    <div>Delhi</div>-->
                </div>
            </div>
            <div class="to">
                <p>TO</p>
                <h2 id="h2_2">DELHI</h2>
                <div class="to_dropdown">
                    <select name="destination" id="select_2" >                
                        <?php $result=selectAll('flight_list')?>
                        <?php $arr=array()?>
                        <?php foreach($result as $data):?>
                            <?php foreach($data as $key=>$value):?>
                                <?php if($key==='destination'):?>
                                <?php array_push($arr,$value);?>
                                <?php endif?>
                            <?php endforeach?>
                        <?php endforeach?>
                        <?php $arr=array_unique($arr)?>
                        <?php foreach($arr as $key=>$value):?>
                            <option value="<?php echo $value?>" "><?php echo "$value"?></option>
                        <?php endforeach?>
                        <!--<div>Mumbai</div>
                        <div>Pune</div>                    
                        <div>Delhi</div>
                        <div>Ahemdabad</div>-->
                    </select>
                </div>
            </div>
            <div class="Departure" >
                <p>DEPARTURE</p>
                <input type="date" name="arrival_time">
            </div>
            <div class="Return" >
                <p>RETURN</p>
                <input type="date" name="departure_time">
            </div>
            <div class="Traveller">
                <p>TRAVELLERS & CLASS</p>
                <p id="select_3"></p>
                <div class="Traveller_dropdown">
                    <p>Choose class</p>
                    <!-- need to insert traveller result class-->
                    <input type="radio"  name="class" class="radio">Business<br>
                    <input type="radio"  name="class" class="radio">Economy
                </div>
            </div>
        <button class="submit" name="submit">Search
        </button>
    </form>
    </div>
    
    <div class="cont_3">
        <img src="images/a1.jpg">
    
    </div>
    
    <div class="cont_4">
        <h2>Famous Holiday Destination</h2>
        <div class="Special_offers">
            <div>
                <img src="images/Chennai.jpg"><br>
                <p>Via-Delhi,Mumbai,Coimbatore,Madurai</p>
            </div>
            <div>
                <img src="images/Mumbai.jpg">
                <p>Via-Delhi,Mumbai,Chennai,Ahemdabad</p>
            </div>
            <div>
                <img src="images/Goa.jpg">
                <p>Via-Delhi,Mumbai,Bangalore,Ahemdabad</p>
            </div>
            
            <div>
                <img src="images/Hyderabad.jpg">
                <p>Via-Chennai,Mumbai,Bangalore,Delhi</p>
            </div>
            <div>
                <img src="images/Delhi.jpg">
                <p>Via-Mumbai,Pune,Bangalore,Chennai</p>
            </div>
            <div>
                <img src="images/Pune.jpg">
                <p>Via-Delhi,Bangalore,Chennai,Ahemdabad</p>
            </div>
            <div>
                <img src="images/Kolkata.jpg">
                <p>Via-Delhi,Mumbai,Bangalore,Pune</p>
            </div>
            <div>
                <img src="images/Bangalore.jpg">
                <p>Via-Delhi,Mumbai,Pune,Kolkata</p>
            </div>
            <div>
                <img src="images/Goa.jpg">
                <p>Via-Delhi,Mumbai,Bangalore</p>
            </div>
        </div>
    </div>
    <div class="cont_6">
        <div class="Travel_blog">
            
            <div class="kashmir_blog">
                <img src="images/travel_blog_1.jpg">
                <a href="http://www.kashmir-tourism.org/"><p>Best places that fascinates in Kashmir </p>
                </a>
            </div>

            <div class="mumbai_blog">
                <img src="images/mumbai_blog_image.jpg">
                <a href="https://www.holidify.com/places/mumbai/"><p>Travel to the Economic capital of India</p>
                </a>
            </div>
            <div class="goa_blog">
                <img src="images/travel_blog_2.jpg">
                <a href="https://goa-tourism.com/"><p>Party All night with no rules in Goa </p>
                </a>
            </div> 
            <div class="kolkata_blog">
                <img src="images/travel_blog_3.jpg">
                <a href="https://www.wbtourismgov.in/home/kolkata"><p>Flow with the river in Kolkata  </p>
                </a>
            </div> 
        </div>
    </div>
    <div class="cont_7">
        <h2>Contact-us:agrawalpavan755@gmail.com</h2>
        <h2>Contact-us:munnobhat@gmail.com </h2>
    </div>
</div>
</body>
       
        
</body>
</html>


