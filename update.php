<?php
include 'connection.php';

$id=$_GET['updateid'];
$sql="SELECT * FROM registration WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$group=$row['blood_group'];
$date=$row['date'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $blood_group=$_POST['blood_group'];
  $date=$_POST['date'];


$sql="UPDATE registration SET id=$id,name='$name',email='$email',address='$address',phone='$phone',blood_group='$blood_group',date='$date' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
   header ("location:display.php");
}else{
    die (mysqli_error($conn));
}








}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
  <form method="post" novalidate>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Name</label>
      <input type="text" class="form-control" autocomplete= "off" placeholder="Enter your name" name="name" value=<?php echo $name ;?>>
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" autocomplete= "off" name="email" placeholder="Enter your email" value=<?php echo $email ;?>>
    </div>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  autocomplete= "off"name="address" placeholder="Enter your address" value=<?php echo $address?>>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Phone</label>
      <input type="tel" class="form-control" autocomplete= "off" name="phone" value="<?php echo $phone?>">
    </div>
    <div class="form-group col-md-4">
      <label >Blood group</label>
      <select class="custom-select mr-sm-2"  name="blood_group" value="<?php echo $group?>">
        <option selected>Choose...</option>
        <option>A Positive</option>
<option>A Negative</option>
<option>A Unknown</option>
<option>B Positive</option>
<option>B Negative</option>
<option>B Unknown</option>
<option>AB Positive</option>
<option>AB Negative</option>
<option>AB Unknown</option>
<option>O Positive</option>
<option>O Negative</option>
<option>O Unknown</option>
<option>Unknown</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label>Date</label>
      <input type="date" class="form-control" name="date" value="<?php echo $date?>" >
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary " name="submit">Update</button>
</form>

        
    </div>
</body>
</html>