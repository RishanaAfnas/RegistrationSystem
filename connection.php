<?php
  
  $conn=mysqli_connect("localhost","root","","blood_donation");

  if(!$conn){
     die ("connection failed".mysqli_error_connect());
  }



?>