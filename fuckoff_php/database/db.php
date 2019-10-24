<?php
session_start();
require("db_connection.php");

function dd($value)
{
    echo "<pre>",print_r($value,true),"</pre>";
}

function selectAll($table,$conditions=[])
{
    global $conn;
    $sql="select * from  $table";
    if(empty($conditions))
    {
        $stmt=$conn->prepare($sql);
        if($stmt->execute());
        {
            $result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $result;
        }
    }
    else{
        $i=0;
        foreach($conditions as $key=> $value){
            if($i===0)
            {
                $sql=$sql." WHERE $key=?";
                $i+=1;
            }
            else{
                $sql=$sql." AND $key=?";
            }
        }
        //dd($sql);
        $stmt=executeQuery($sql,$conditions);
        if($stmt->execute())
        {
            $result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $result;
        }
    }
}

function selectOne($table,$conditions)
{
    global $conn;
    $sql="select * from  $table";
    $i=0;
    foreach($conditions as $key=> $value){
        if($i===0)
        {
            $sql=$sql." WHERE $key=?";
            $i+=1;
        }
        else{
            $sql=$sql." AND $key=?";
        }
    }
    $sql=$sql." LIMIT 1";
    $stmt=executeQuery($sql,$conditions);
    if($stmt->execute())
    {
        $result=$stmt->get_result()->fetch_assoc();
        return $result;
    }
}

function executeQuery($sql,$data){
    global $conn;
    $stmt=$conn->prepare($sql);
    $values=array_values($data);
    $types=str_repeat('s',count($values));
    $stmt->bind_param($types, ...$values);
    return $stmt;
}


function create($table,$data)
{
    global $conn;
    $sql="insert into $table SET ";

    $i=0;
    foreach($data as $key=> $value){
        if($i===0)
        {
            $sql=$sql." $key=?";
            $i+=1;
        }
        else{
            $sql=$sql.", $key=?";
        }
    }
    //dd($sql);
    $stmt=executeQuery($sql,$data);
    if($stmt->execute())
    {
        $result=$stmt->insert_id;
        return $result;
    }
    
}

function update($table,$id,$data)
{
    global $conn;
    $sql="Update $table SET ";

    $i=0;
    foreach($data as $key=> $value){
        if($i===0)
        {
            $sql=$sql." $key=?";
            $i+=1;
        }
        else{
            $sql=$sql.", $key=?";
        }
    }
    $sql=$sql." where employee_id=?";
    //dd($sql);
    $data['employee_id']=$id;
    //dd($data);
    $stmt=executeQuery($sql,$data);
    if($stmt->execute())
    {
        $result=$stmt->affected_rows;
        return $result;
    }
    
}


function delete($table,$id)
{
    global $conn;
    $sql="Delete from $table where employee_id=?";
    $stmt=executeQuery($sql,['employee_id'=>$id]);
    if($stmt->execute())
    {
        $result=$stmt->affected_rows;
        return $result;
    }
    
}





$conditions=[
    'salary'=> 23000,
    'shift'=>'Morning',
    'employee_name'=>'Chumki Biswas'
];





?>