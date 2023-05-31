<?php
include "config.php";
$name=$_POST['sname'];
$gender=$_POST['gen'];
$email =$_POST['email'];
$phno =$_POST['phno'];
$language=$_POST['lang'];
$state =$_POST['state'];
$details =$_POST['about'];

$query="insert into regist values('$name','$gender','$email','$phno','$language','$state','$details')";
 
if(isset($_POST['Register']))
{
if($res=mysqli_query($con,$query))
 {
	echo"<script>alert('data stored');</script>";
}
else
{
	echo"<script>alert('data eror');</script>";
}
}
 
?>