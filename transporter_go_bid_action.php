<?php
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$a=$_REQUEST['user_id'];
$b=$_REQUEST['password'];
$c=$_REQUEST['cons'];
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
?>
<!DOCTYPE html>
<html lang="en"> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TRANSPORTER-GO-BID</title>
 
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
                
                <a class="dropdown-item"href="  transporter_vehicle.php">Add Vehicle</a>
                
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
<div id="body">
<div id="transporter_company1">
</div>
<div id="transporter_designe-by1">
</div>
<div id="transporter_down-space1"></div>
<div id="user_title">
<div id="user_title_transporter"></div>
</div>
<div id="user_subtitle_transporter">
<section>
    <h1>ONLINE BIDING FOR LOGISTIC SYSTEM(BILS)</h1>
  </section>
</div>
<div id="user_title_menu">
<div class="wrapper">
<div class="container"><ul class="menu" rel="sam1">
<li><a href="user_transporter_home.php">Home</a></li>
<li><a href="transporter_search.php">Search</a></li>
<li class="active"><a>Go_Bid</a></li>
<li><a href="transporter_history.php">History</a></li>
<li><a href="transporter_help.php">Help</a></li>
<li><a href="transporter_contact_us.php">Contact_us</a></li>
<li><a href="index.php">Log_Out</a></li>
</ul>
</div>
</div>
</div>
 
<div id="bid">
<div id="my_price" class=" col-12"><br>
<center><h3>My Price</h3></center>
<form id="myprice" name="myprice" method="post">
<input type="number" id="price" name="price" class="price-box"> <input type="submit" id="submit" name="submit" value="SUBMIT" class="button">
</form>
</div>
<div id="all_bid"><br>
<center><h3>Consignment List</h3></center>
</div>
<div id="heighest_price"><br>
<center><h3>Heighest Price</h3></center>
</div>
<div id="bid_consignment"><br>
<center><h3>Consignment Detail</h3></center>
 
   <div class="roe">
     
<div class="col-md-6  col-lg-6 col-12"> TYPE OF CONSIGNMENT</div> 
<div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['type_cons']?></div>
   
   
<div class="col-md-6  col-lg-6 col-12"> DESCRIPTION ABOUT CONSIGNMENT</div> 
<div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['description']?></div>
   
   
<div class="col-md-6  col-lg-6 col-12"> APPROXIMATE WEIGHT OF CONSIGNMENT</div>
 <div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['weight']?></div>
   
   
<div class="col-md-6  col-lg-6 col-12"> transporter OFFERED PRICE</div>
 <div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['base_price']?></div>
   
   
<div class="col-md-6  col-lg-6 col-12"> CONSIGNMENT DELIVERY DATE</div>
 <div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['date_of_delivery']?></div>
   
   
<div class="col-md-6  col-lg-6 col-12"> CONSIGNMENT DELIVERY PLACE</div>
 <div class="col-md-6  col-lg-6 col-12"> <?php echo $ef['place_of_delivery']?></div>
   </div> 
</div>
</div>
<div id="user_title_logo">
</div>
<div id="user_name">
<h1><?php echo $qr['name']?></h1>
</div>
<div id="user_profile_pic1">
<?php echo '<img height="170px" width="145px" src="image//'.$qr['passport_photo'].'">'; ?>
</div>
<div id="transporter_profile_pic1">
<?php echo '<img height="70px" width="65px" src="image//'.$gh['photo'].'">'; ?>
</div>

</div>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>