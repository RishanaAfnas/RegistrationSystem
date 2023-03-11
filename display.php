<?php
include 'connection.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="container">
    <button class=" btn btn-primary  my-5"><a href="index.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
      <th scope="col">Blood group</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM registration";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) >0){
     while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['name'];
      $email=$row['email'];
      $address=$row['address'];
      $phone=$row['phone'];
      $group=$row['blood_group'];
      $date=$row['date'];
      echo '
      <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$phone.'</td>
      <td>'.$group.'</td>
      <td>'.$date.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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