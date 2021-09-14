<?php 
session_start(); 
// error_reporting(0);
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
}
$u=$_POST['username'];
$a=$_POST['email'];
$b=$_POST['userid'];
$c=$_POST['mobile'];
$d=$_POST['query']; 
$xy="INSERT INTO `complaint`( `username`, `email`, `userid`, `mobile`, `query`) VALUES
 ('$u', '$a','$b','$c','$d')"; 
 mysqli_query($con,$xy); 
 ?><center>
 <div >
   <h1 style="color: green ;"> Successful  submited your query</h1>
   <h2>Please go back on your page or <span><a href="index.php">login page</a> </span></h2>
 </div></center>
 