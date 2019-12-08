<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  $fname=$_POST["txtfname"];
  $lname=$_POST["txtlname"];
  $noOfTrav=$_POST["txtnoOfTrav"];
  $roomNo=$_POST["txtRoomno"];
  $nicNo=$_POST["txtnicno"];
  $TelNo=$_POST["txtTel"];
  $email=$_POST["txtEmail"];
  $avalability=$_POST["ckhbooked"];
  $i=000;
  $cusNo=$i+1;
  
  $con= mysqli_connect("localhost","root","");
  
  $database=mysqli_select_db($con,"hotel_reservation");
  
  $sql="insert into booking(cusNo,FirstName,LastName,noOfTravellers,roomNo,avalability,NIC_No,contactNo,email) values('$cusNo','$fname','$lname','$noOfTrav','$roomNo','$avalability','$nicNo','$TelNo','$email')";
  
  $reslt=mysqli_query($con,$sql);
  
  mysqli_close($con);
  
?>
</body>
</html>