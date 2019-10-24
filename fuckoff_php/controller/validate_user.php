<?php


function validate($user)
{
    $errors=array();
    if(!isset($user['first_name']))
    {
        array_push($errors,"Firstname is required");
    }
    if(!isset($user['middle_name']))
    {
        array_push($errors,"Middlename is required");
    }
    if(!isset($user['last_name']))
    {
        array_push($errors,"Lastname is required");
    }
    if(!isset($user['Email']))
    {
        array_push($errors,"Email is required");
    }
    if(!isset($user['phone']))
    {
        array_push($errors,"Phone number is required");
    }
    $existing_user=selectOne("user_list",["first_name"=>$user['first_name']]);
    if(isset($existing_user))
    {
        array_push($errors,"first_name already taken");
    }
    return $errors;
}





