<?php
error_reporting(0);
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$a=$_POST['user_id'];
$b=$_POST['password'];
$c=$_POST['cons'];
$e="select *from consignment where type_cons='$c'";
$f=mysqli_query($con,$e);
$ef=mysqli_fetch_assoc($f);
$x=$ef['user_name'];
$g="select *from client where user_name='$x'";
$h=mysqli_query($con,$g);
$gh=mysqli_fetch_assoc($h);
$q="select *from transporter_owner where user_name='$a'";
$r=mysqli_query($con,$q);
$qr=mysqli_fetch_assoc($r);
$c=$qr['user_name'];
$d=$qr['password'];
if($a==$c&&$b==$d);
else
{
	header("location:user_login.php");
}
?><!DOCTYPE> 
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TRANSPORTER-GO-BID</title>
        <link rel="stylesheet"  type=" text/css" href="style/style.css" >
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    </head>
    <body>
     
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="home.php">TRANSPORTER</a>
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
                <a class="dropdown-item" href="cust_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href=" transporter_transporter.php"> Transporter</a>
                
                <a class="dropdown-item" href=" transporter_album.php"> Album</a>
                <a class="dropdown-item" href=" transporter_bidding.php"> Bidding</a>
                <a class="dropdown-item" href=" transporter_bid.php"> Bid</a>
                
                <a class="dropdown-item" href="consignment.php"> Consignment</a>
                <a class="dropdown-item" href=" transporter_message.php"> Message</a>
                
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
 <section class="m-auto w-50">
 <div  class="my-5 py-5"> 
    <div  class=" col-12"> 
    <center><h3>My Price</h3></center></div>
    <form id="myprice" name="myprice" method="post">
      <div  class="col-md-6 col-lg-6 col-12"> <input type="number" id="price" name="price" class="price-box">  </div>
      <div  class="col-md-6 col-lg-6 col-12"> <input type="submit" id="submit" name="submit" value="SUBMIT" class="button"> </div>
    </form>
    <div class=" col-12"> 
    <center><h3>Consignment List</h3></center>
    </div>
    <div class=" col-12">
    <center><h3>Heighest Price</h3></center>
    </div>
    <div class=" col-12"><br>
    <center><h3>Consignment Detail</h3></center></div>
    <form>
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>TYPE OF CONSIGNMENT</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['type_cons']?></div>
   
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>DESCRIPTION ABOUT CONSIGNMENT</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['description']?></div>
   
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>APPROXIMATE WEIGHT OF CONSIGNMENT</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['weight']?></div>
   
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>CLIENT OFFERED PRICE</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['base_price']?></div>
   
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>CONSIGNMENT DELIVERY DATE</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['date_of_delivery']?></div>
   
    
    <div  class="col-md-6 col-lg-6 col-12"> <lable>CONSIGNMENT DELIVERY PLACE</lable></div>  <div  class="col-md-6 col-lg-6 col-12">  <?php echo $ef['place_of_delivery']?></div>
   
    </form><br>
    </div>
      
    <div  class="col-md-6 col-lg-6 col-12">
    <h1><?php echo $qr['name']?></h1>
    </div>
    <div  class="col-md-6 col-lg-6 col-12">
    <?php echo '<img height="170px" width="145px" src="image//'.$qr['passport_photo'].'">'; ?>
    </div>
    <div  class="col-md-6 col-lg-6 col-12">
    <?php echo '<img height="70px" width="65px" src="image//'.$gh['photo'].'">'; ?>
    </div>

   </div></section>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>