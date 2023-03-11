<?php


include 'connection.php';
if(!isset($name)){
  $name= '';
}
if(!isset($email)){
  $email= '';
}
if(!isset($phone)){
  $phone= '';
}
if(!isset($address)){
  $address= '';
}
if(!isset($blood_group)){
  $blood_group= '';
}
if(!isset($date)){
  $date= '';
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
  <div class="text-center mb-5"> <h1>REGISTRATION FORM</h2></div>
 <form  action="validation.php" method="post" novalidate>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Name</label>
      <input type="text" class="form-control" autocomplete= "off" placeholder="Enter your name" name="name" value="<?php echo htmlspecialchars($name);?>">
      <?php if(isset($name_error)){
                ?><p><?php echo $name_error ?></p><?php
             }?>
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" autocomplete= "off" name="email" placeholder="Enter your email"  value="<?php echo htmlspecialchars($email);?>">
      <?php if(isset($email_error)){
                ?><p><?php echo $email_error ?></p><?php
             }?>
      
    </div>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  autocomplete= "off"name="address" placeholder="Enter your address"  value="<?php echo htmlspecialchars($address);?>">
    <?php if(isset($address_error)){
                ?><p><?php echo $address_error ?></p><?php
             }?>
      
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Phone</label>
      <input type="tel" class="form-control" autocomplete= "off" name="phone"  value="<?php echo htmlspecialchars($phone);?>">
      <?php if(isset($phone_error)){
                ?><p><?php echo $phone_error ?></p><?php
             }?>
      
    </div>
    <div class="form-group col-md-4">
      <label >Blood group</label>
      <select class="custom-select mr-sm-2"  name="blood_group"  value="<?php echo htmlspecialchars($blood_group);?>">
      <option selected></option>
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
      <?php if(isset($blood_group_error)){
                ?><p><?php echo $blood_group_error ?></p><?php
             }?>
     
    </div>
    <div class="form-group col-md-2">
      <label>Date</label>
      <input type="date" class="form-control" name="date"  value="<?php echo htmlspecialchars($date);?>" >
      <?php if(isset($date_error)){
                ?><p><?php echo $date_error ?></p><?php
             }?>
      
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
</form>

        
    </div>
</body>
</html>