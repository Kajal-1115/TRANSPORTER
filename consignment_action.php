<?php
session_start();
// error_reporting(0);

$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
} 
// $c=$_SESSION['user_name'];
$u=$_POST['user_name'];
$a=$_POST['consign'];
$b=$_POST['approx_weight'];
$c=$_POST['description'];
$d=$_POST['price'];
$e=$_POST['delivery'];
$f=$_POST['place']; 
// $xy="insert into consignment(user_name,type_cons,weight,description,base_price,date_of_delivery,place_of_delivery) 
// values('$u','$a','$b','$c',$d,'$e','$f')";
$xy="INSERT INTO `consignment`( `user_name`, `type_cons`, `weight`, `description`, `base_price`,
 `date_of_delivery`, `place_of_delivery`) 
VALUES ('$u','$a','$b','$c','$d','$e','$f')";
// $xy="INSERT INTO `consignment`( `user_name`, `type_cons`, `weight`, `description`, `base_price`, `date_of_delivery`, `place_of_delivery`) 
// VALUES ('$u','$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$xy); 
 
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
        <a class="navbar-brand" href="client_home.php">TRANSPORTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="client_home.php">Home <span class="sr-only">(current)   </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="client_bid.php">GO Bid <span class="sr-only">(current)   </a>
            </li>
             
            <li class="nav-item dropdown color-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More<span class="sr-only">(current) 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="client_profile.php">Profile</a>
                <a class="dropdown-item" href="cust_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href="client_client.php"> Transporter</a>
                
                <a class="dropdown-item" href="client_album.php"> Album</a>
                <a class="dropdown-item" href="client_bidding.php"> Bidding</a>
                 
                <a class="dropdown-item"href="client_company.php"> Add Company</a>
                
                <a class="dropdown-item" href="consignment.php"> Consignment</a>
                
                
                <a class="dropdown-item"  href="client_setting.php"> Setting</a>
                <a class="dropdown-item"  href="client_history.php">History </a>
                <a class="dropdown-item"  href=" client_galary.php">Galary</a> 
                
                <a class="dropdown-item" href="contact_us.php">Contact us</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
                 
                </div>
            </li> 
           
            </ul>
            <form class="form-inline my-2 my-lg-0" action="client_search.php">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search"  >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
</nav>
<div class="row text-center py-5 my-5 m-auto w-50">  
<div ><h2>You are Entered Your Consignment  Detail...</h2></div> 
<div class="col-lg-6 col-md-6    col-12"><lable>Your User name</lable> </div> 
     <div class="col-lg-6 col-md-6    col-12"> <?php echo $u?> </div> 
    <div class="col-lg-6 col-md-6    col-12"><lable>Consignment </lable> </div> 
     <div class="col-lg-6 col-md-6    col-12"> <?php echo $a?> </div> 
    <div class="col-lg-6 col-md-6    col-12"><lable>price</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $d?></div> 
	<div class="col-lg-6 col-md-6    col-12"><lable>Approx weight</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $b?></div> 
	<div class="col-lg-6 col-md-6    col-12"><lable>Description</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $c?></div> 
	<div class="col-lg-6 col-md-6    col-12"><lable>Delivery date</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $e?></div> 
	<div class="col-lg-6 col-md-6    col-12"><lable>Place</lable> </div>  
    <div class="col-lg-6 col-md-6    col-12"><?php echo $f?></div> 
<div class="col-12"><a href="client_home.php"><h2>goto Home</h2></a></div>
</div> 
 <footer class=" fixed-bottom">
        <p class="p-3 bg-dark text-white text-center">@transportservice</p>
    </footer>
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>