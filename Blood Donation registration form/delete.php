<?php

$hostName="localhost";
$userName='root';
$password="";
$my_db="validation_db";

$conn=mysqli_connect($hostName,$userName,$password,$my_db);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM registration WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}



?>