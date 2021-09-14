<?php
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
}
  
$a=$_POST['user_id'];
$b=$_POST['password'];
$qu="select *from admin where user_id='$a'&&password='$b'";
$ac=mysqli_query($con,$qu);
$ad=mysqli_fetch_assoc($ac);
$c=$ad['user_id'];
$d=$ad['password'];
if($a==$c&&$b==$d)
{
	header("location:home.php");
}
else
{
	echo"Your User Name Or Password is Wrong";
}
?>
