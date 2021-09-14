<?php session_start();
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
}$a=$_SESSION['user_name']; 
 
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
<body class="bg-secondary"> 
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
<section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">HISTORY</h2> 
        </div>
        <div class="main-div">
<h1 class="text-center">LIST OF BID</h1>
<div class="center-div">
    <div class="table-responsive">
        <div class="col">  
            <div>
                <?php  $z="SELECT * FROM `bid`";
                  $sql=mysqli_query($con,$z); ;
                     $num= mysqli_num_rows($sql); 
                     while($d=mysqli_fetch_assoc($sql)){ 
                         if($a===$d['username']){
                                    ?>
        <section class="my-5 py-5">

                <div>
                <h1 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">                  
                   <?php echo $d['username']?></span></h1> 
                </div>
                <div class="w-50 m-auto">
                    <div id="profile_client">
                    <div class="row">
                        <div class="col-12 text-center " id="user_name"> <h4>  
                        <?php echo $d['username']?></h4>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Bid No</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $d['bid_no']?> </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> Username</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['username']?> </div> <br>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['name']?> </div>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Email</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['e_mail']?></div>
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Mobile no</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['mobile_no']?> </div>
                       
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Highest Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['higest_price']?> </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Type of Transport</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php echo $d['type_of_transport']?> </div>
                        
					   <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> All Description About Consignment</label>
                        </div>
                        <div class=" col-md-6 col-lg-6 col-12"> <?php echo $d['description']?></div>
                     
					
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Date of Delivery</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12"> <?php echo $d['date_of_delivery']?>
                        </div>      
                    
                    </div>
                </div>
                </div>

        </section><?php
                         }
                        echo"<br>";         
                        } 
                        ?>
         <h1 class="text-center">NO other record found</h1 class="text-center">
                 </div>
        </div>
    </div>
</div>
        </div>
</section>
    
           
<footer>
        <p class="p-3 bg-dark text-white text-center"></p>
    </footer>
     
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

