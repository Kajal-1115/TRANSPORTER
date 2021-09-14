
<?php
session_start(); 
error_reporting(0);
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
}
$abc=$_SESSION['user_name'];
$a=$_SESSION['e_mail'];
// $n="SELECT FROM transporter_owner where user_name=$a";
// $z=mysqli_query($con,$n);
// $qr=mysqli_fetch_assoc($z);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transporter</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" > 
      <script type="text/javascript"  src="js/copy.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
 
    </head>
<body style="background-color: #0001ef ;"> 
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
<section class="my-5">
      <div class="py-5"> 
         <h2 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">TRANSPORTER VEHCILE</span></h2> 
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name="transporter" action="transporter_vehicle_action.php "    method="POST" onSubmit="return call(this.form);" >
                 <div class="form-group text-white">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> EMAIL</label>
                         </div>
                         <div class="col-lg-6 col-md-6    col-12">
                          <input type="email" id="email" name="email" value="<?php echo $a ?>" title="Username"  class="input-box form-control" required  >
                         </div> <br>
                       
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> VEHCILE NUMBER</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="vechile_number" name="vechile_number" placeholder="VEHCILE NUMBER"  class="input-box form-control" required> 
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> LICENSE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="license" name="license" placeholder="LICENSE"  class="input-box form-control" required> 
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> DRIVING LICENSE</</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="driving_license" name="driving_license"   class="input-box form-control" >
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for="">OWNER BOOK</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="owner_book" name="owner_book"  class="input-box form-control"  >
                       </div>
                       
                       <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> ID PROOF</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="id_proof" name="id_proof"  class="input-box form-control"  >
                     </div>
                      
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> PASSPORT PHOTO</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="photo" name="photo"  class="input-box form-control"  >
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">SIGNATURE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="signature" name="signature"  class="input-box form-control"  >
                    </div>
                     
                    </div>
                    <center>
                           <div class="col-lg-6 col-md-6    col-6 ">
                           <button type="reset" id="reset" class= "btn btn-primary form "value="LOGIN" >RESET</button>
                           <button type="submit" id="submit" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="LOGIN" >SUBMIT</button>
                        
                           </div>
                         
                           <div class="col-lg-6 col-md-6    col-">
                          
                          </div>
                        </center>
                  
                       
                </div> 
            </form>
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