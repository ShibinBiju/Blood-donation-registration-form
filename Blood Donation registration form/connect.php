<?php
$hostName="localhost";
$userName='root';
$password="";
$my_db="validation_db";

$conn=mysqli_connect($hostName,$userName,$password,$my_db);
if(!$conn){
    echo "failed to connect";
}else{
    echo "sucessfully connected..";
}

if(!empty($_POST)){
  $firstName=!empty($_POST['fname'])?$_POST['fname']:'';
  $lastName=!empty($_POST['lname'])?$_POST['lname']:'';
  $adress=!empty($_POST['adress'])?$_POST['adress']:'';
  $bloodGroup=!empty($_POST['blood_group'])?$_POST['blood_group']:'';
  $date=!empty($_POST['date'])?$_POST['date']:'';
  $phone=!empty($_POST['phone'])?$_POST['phone']:'';

  
}

  $sql="INSERT INTO registration (firstname,lastname,adress,bloodgroup,date,phone) VALUES ('$firstName','$lastName','$adress','$bloodGroup','$date','$phone')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header('location:display.php');
  }else{
    die(mysqli_error($conn));
  }


?>