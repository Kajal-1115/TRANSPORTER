<?php
session_start();
?>
<?php
// error_reporting(0);
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
} 
// $z=$_SESSION['user_name'];
$u=$_POST['email'] ;
$a=$_POST['vechile_number'];
$b=$_POST['license'];
$c=$_POST['driving_license'];
$d=$_POST['owner_book'];
$e=$_POST['id_proof'];
$f=$_POST['photo'];
$g=$_POST['signature'];
$xy="INSERT INTO `tranporter_vehicle`(`vehcile_no`, `e_mail`, `license`, `id_proof`, `driving_license`, `owner_book`, `passport_photo`, `signature`) 
VALUES ('$a','$u','$b','$e','$c','$d','$f','$g')";
 
$r= mysqli_query($con,$xy);
 
 
{
?><!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transporter</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
		 
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="transporter_home.php">TRANSPORTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="transporter_home.php">Home <span class="sr-only">(current)   </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href=" transporter_owner_bid.php">GO Bid <span class="sr-only">(current)   </a>
            </li>
             
            <li class="nav-item dropdown color-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More<span class="sr-only">(current) 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href=" transporter_profile.php">Profile</a>
                <a class="dropdown-item" href="transporter_customer_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href="  transporter_vehicle.php"> Add Vehicle</a>
                
                <a class="dropdown-item" href=" transporter_album.php"> Album</a>
                <a class="dropdown-item" href=" transporter_bidding.php"> Bidding</a>
                <a class="dropdown-item" href=" transporter_bid.php"> Bid</a>
                
                <a class="dropdown-item" href="transporter_consignment.php"> Consignment</a>
                 
                
                <a class="dropdown-item"  href=" transporter_setting.php"> Setting</a>
                <a class="dropdown-item"  href=" transporter_history.php">History </a>
                <a class="dropdown-item"  href=" transporter_galary.php">Galary</a>   
                <a class="dropdown-item" href=" contact_us.php">Contact us</a>
                <a class="dropdown-item"  href="logout.php">Logout   </a>
               
                </div>
            </li> 
           
            </ul>
            <form class="form-inline my-2 my-lg-0" action=" transporter_search.php">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search"  >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
</nav>
<div class="row text-center py-5 my-5 m-auto w-50">  
<div ><h2>You are Entered Your Company  Detail...</h2></div> 
<div class="col-lg-6 col-md-6    col-12"><lable>Your Email</lable> </div> 
     <div class="col-lg-6 col-md-6    col-12"> <?php echo $u?> </div> 
    <div class="col-lg-6 col-md-6    col-12"><lable>Your Vehicle No</lable> </div> 
     <div class="col-lg-6 col-md-6    col-12"> <?php echo $a?> </div> 
    <div class="col-lg-6 col-md-6    col-12"><lable>Your LICENSE No</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $b?></div> 
<div class="col-12"><a href="transporter_home.php"><h2>goto Home</h2></a></div>
</div> 
 <footer class=" fixed-bottom">
        <p class="p-3 bg-dark text-white text-center">@transportservice</p>
    </footer>
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>
