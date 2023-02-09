<?php
$hostName="localhost";
$userName='root';
$password="";
$my_db="validation_db";

$conn=mysqli_connect($hostName,$userName,$password,$my_db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="text-center pb-5">
        <h1>Registed users lists</h1>
    </div>
    <div>
    <button class="btn btn-primary"> <a style="text-decoration:none"; class="text-white" href="index.php">Register page</a> </button>
    </div>
  

<table class="table">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Adress</th>
    <th>Blood Group</th>
    <th>Scheduled Date</th>
    <th>Phone No</th>
    <th>Operations</th>
  </thead>
  <tbody>
    <?php
        $sqll="SELECT * FROM registration";
        $result=mysqli_query($conn,$sqll);
        if($result){
           while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $firstName=$row['firstname'];
            $lastName=$row['lastname'];
            $adress=$row['adress'];
            $bloodGroup=$row['bloodgroup'];
            $date=$row['date'];
            $phone=$row['phone'];
            echo 
            '<tr>
              <th scope="row">'.$id.'</th>
              <td colspan="" class="table-active">'.$firstName.'</td>
              <td>'.$lastName.'</td>
              <td>'.$adress.'</td>
              <td>'.$bloodGroup.'</td>
              <td>'.$date.'</td>
              <td>'.$phone.'</td>
              <td>
                  <button class="btn btn-primary"> <a style="text-decoration:none"; class="text-white" href="update.php?updateid='.$id.'">Update</a> </button>
                  <button class="btn btn-danger"> <a style="text-decoration:none"; class="text-white" href="delete.php?deleteid='.$id.'">Delete</a></button>
              </td>
            </tr>';
        }
        }
    




    ?>



  </tbody>
</table>
</div>
    


</body>
</html>