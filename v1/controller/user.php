<?php
    include("validate_user.php");
$errors=array();
$bool_error=0;
$firstname='';
$middlename='';
$lastname='';
$Email='';
$phone='';

if(isset($_POST['Submit']))
{
    $errors=validate($_POST);
    if(count($errors)===0)
    {
        unset($_POST["Submit"],$_POST["Email"]);
        //$user_id=9;
        //$_POST['user_id']=$user_id;
        $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
        //dd($_POST);
        $user_id=create('user_list',$_POST);
        $user = selectOne("user_list",['first_name'=>$_POST['first_name']]);

        $_SESSION['id']=$user['user_id'];
        $_SESSION['username']=$user['first_name'];
        $_SESSION['message']='You are now logged in';
        $_SESSION['type']='success';
        header('location:'.'http://localhost/v1/index.php');
        exit();
    }
    else{
        $bool_error=1;
        $firstname=$_POST['first_name'];
        $middlename=$_POST['middle_name'];
        $lastname=$_POST['last_name'];
        $Email=$_POST['Email'];
        $phone=$_POST['phone'];
    }

}
?>

