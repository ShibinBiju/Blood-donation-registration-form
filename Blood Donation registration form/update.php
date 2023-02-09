<?php
$hostName="localhost";
$userName='root';
$password="";
$my_db="validation_db";

$conn=mysqli_connect($hostName,$userName,$password,$my_db);



$id=$_GET['updateid'];
$sql="SELECT * FROM registration WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
            $firstName=$row['firstname'];
            $lastName=$row['lastname'];
            $adress=$row['adress'];
            $bloodGroup=$row['bloodgroup'];
            $date=$row['date'];
            $phone=$row['phone'];

if(isset($_POST['submit'])){
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $adress=$_POST['adress'];
    $bloodGroup=$_POST['blood_group'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
    
    $sqli="UPDATE registration SET id=$id ,firstname='$firstName',lastname='$lastName', adress='$adress', bloodgroup='$bloodGroup', date='$date', phone='$phone' WHERE id=$id ";
    $results=mysqli_query($conn,$sqli);
    if($results){
      header('location:display.php');
    
    }else{
      die(mysqli_error($conn));
    }
}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Donation</title>
    <link rel="stylesheet" href="update.css" />

    
  </head>
  <body class="container">
    <div class="header_postion col-12" >
      <h1 class="heading1">BLOOD DONATION REGISTRATION</h1>
      <h1 class="heading2">UPDATING FORM</h1>
      
     
    
    </div>
    <div class="mid-postion row">
    
      <div class="register_form ">
        <form class="form_box" method="POST" action="">
          <h4>update form here</h4>
          <div class="form_gap">
            <div style="width: 50%; float: left">
              <label for="">First Name</label> <br />
              <input
                class="form_name"
                type="text"
                name="fname"
                placeholder=" Enter you First Name"
                value=<?php echo $firstName; ?>
                required
              />
            </div>

            <div style="width: 50%; float: left">
              <label for="">Secound Name</label> <br />
              <input
                class="form_name"
                type=""
                name="lname"
                placeholder=" Enter you last Name"
                value=<?php echo $lastName; ?>
                required
              />
            </div>
          </div>

          <br />
          <br />
          <br />
          <div class="form_gap">
            <label for="">Adress</label> <br />
            <input
              class="adress_form"
              type="text"
              name="adress"
              id="adress"
              placeholder=" Enter your adress"
              value=<?php echo $adress; ?>
              required
            />
          </div>

          <div class="form_gap">
            <div style="float: left; width: 50%">
              <label for="">Blood Group</label> <br />
              <select name="blood_group" id="blood_group" 
              value=<?php echo $bloodGroup; ?> required>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
            <div style="float: left; width: 50%">
              <label for="">Scheduling Date</label> <br />
              <input type="date" name="date" id="date" value=<?php echo $date; ?> required />
            </div>
          </div>
          <br />
          <br />
          <br />
          <div class="form_gap">
            <label for="">Phone</label> <br />
            <input
              type="tel"
              name="phone"
              id="phone"
              placeholder=" Enter your phone number"
              value=<?php echo $phone; ?>
              required
            />
          </div>
          <div class="submit_button">
            <input type="submit" id="button" value="update" name="submit" required >
          </div>
        </form>
      </div>
    
    </div>


  </body>
</html>
