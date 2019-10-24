<?php
if(isset($_POST['submit']))
{
$arr=array();
unset($_POST['departure_time'],$_POST['arrival_time'],$_POST['submit'],$_POST['class'],$_POST['trip_way']);
dd($_POST);
$result=selectAll('flight_list',$_POST);
$_SESSION['result']=$result;
header("location: http://localhost/fuckoff_php/post.php");
exit();
}
?>

