<?php
session_start()
?>
<?php
$con=mysqli_connect("localhost","root","","transporter");
	if(!$con)
	{
		echo"Not Connected";
	} 
	$q=$_SESSION["user_name"];
    $mn="select *from client where user_name='$q'";
$r=mysqli_query($con,$mn);
$d=mysqli_fetch_assoc($r);  
// $a=$qr['email'];
// $b="select *from client where e_mail='$a'";
// $c=mysqli_query($con,$b);
// $d=mysqli_fetch_assoc($c);
// $e=$d['name'];
{

    ?>
<!DOCTYPE html>
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
<body style="background-color: #0001ef ;" class=" text-white">
  
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
<section class="my-5 py-5">

     <div>
     <h1 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);"><?php echo $d['type']?></span></h1> 
     </div>
     <div class="w-50 m-auto">
         <div id="profile_client">
          <div class="row">
             <div class="col-6 " id="user_name"> <h4>  
             <?php echo $d['user_name']?></h4>
             </div>
             
             <div class="col-6 text-center" id="user_profile_pic1">    <?php echo '<img height="170px" width="145px" src="image//'.$d['photo'].'">'; ?>
             </div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">  Name</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['name']?></div> 
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Date of Birth</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['birth']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Gender</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['gender']?></div> 
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Nationality.</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['nationality']?></div>
             
                
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Present State</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['present_state']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Dist</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['present_dist']?></div>
             
                
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Address</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['present_address']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Pin.</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['present_pin']?></div>
             
                
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Permanent State</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['permanent_state']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Dist</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['permanent_dist']?></div>
             
                
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Address</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['permanent_address']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Pin.</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['permanent_pin']?></div>
             
                
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Mobile Number</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['mobile']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">E-mail</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['email']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">  Language</label></div>
             <div class="col-lg-6 col-md-6    col-12"><div><?php echo $d['language1']?> <?php echo $d['read1']?> <?php echo $d['write1']?> <?php echo $d['speak1']?> </div>
             <div  ><?php echo $d['language2']?> <?php echo $d['read2']?> <?php echo $d['write2']?> <?php echo $d['speak2']?> </div>
             <div  ><?php echo $d['language3']?> <?php echo $d['read3']?> <?php echo $d['write3']?> <?php echo $d['speak3']?> </div>
             </div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">UID Number</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['uid']?></div>
             
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Company reg. Number</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['company_registration']?></div>
             
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Company Address</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['company_address']?></div>
             
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Company Pin Code</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['company_pin']?></div>
            
             </div> 
            
         </div>
        </div>
     </div>
 
</section>
 <footer>
        <p class="p-3 bg-dark text-white text-center">Copyright  Transporter | Designed by CS01</p>
 </footer>
     
 <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 
<?Php }?>