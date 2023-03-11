<?php
include ("connection.php");

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$blood_group=$_POST['blood_group'];
$date=$_POST['date'];
if(empty($name)){
   $name_error="please enter your username";
} elseif(strlen($name) < 6){
   $name_error= "your user name need to have a minimum length of 6 letters";

}
if(empty($email)){
   $email_error="please enter your email";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $email_error= "Invalid email format";
}
if(empty($address)){
   $address_error="please enter your address";
} elseif(strlen($address) < 10){
   $address_error= "your adress need to have a minimum length of 10 letters";
}
if(empty($phone)){
   $phone_error="please enter your username";
} elseif(strlen($phone) < 10){
   $phone_error= "your phone number need to have a minimum length of 10 letters";
}
if(empty($blood_group)){
   $blood_group_error="please enter your blood group";
} 
if(empty($date)){
   $date_error="please enter date";
} 
if(empty($name_error)&& empty($email_error) && empty($address_error) && empty($phone_error) && empty($blood_group_error) && empty($date_error)){
   if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $phone=$_POST['phone'];
      $blood_group=$_POST['blood_group'];
      $date=$_POST['date'];
      $sql="INSERT INTO registration (name,email,address,phone,blood_group,date) VALUES ('$name','$email','$address','$phone','$blood_group','$date')";
      $result=mysqli_query($conn,$sql);
      if($result){
         header ('location:display.php');
      }else{
          die ("insertion failed".mysqli_error($conn));
      }
  }
     
   
}else{
   include ("index.php");
}


?>