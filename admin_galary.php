<?php
session_start();
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
} 
$a=$_SESSION["user_id"]; 
// $q="select *from client where user_name='$a'";
// $r= mysqli_query($con,$q);
// $d=mysqli_fetch_assoc($r);
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
<body  >
 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="home.php">TRANSPORTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)   </a>
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
                
                <a class="dropdown-item"href="client_client.php"> Client</a>
                
                <a class="dropdown-item" href="client_album.php"> Album</a>
                <a class="dropdown-item" href="client_bidding.php"> Bidding</a>
                 
                
                <a class="dropdown-item" href="consignment.php"> Consignment</a>
                <a class="dropdown-item" href="client_message.php"> Message</a>
                
                <a class="dropdown-item"  href="client_setting.php"> Setting</a>
                <a class="dropdown-item"  href="client_history.php">History </a>
                <a class="dropdown-item"  href=" client_galary.php">Galary</a> 
                
                <a class="dropdown-item" href="ontact_us.php">Contact us</a>
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
<div class="main-div">
<h1 class="text-center">LIST OF COMPANY RECORD</h1>
<div class="center-div">
    <div class="table-responsive">
        <div class="col">  
            <div>
                <?php  $z="SELECT * FROM `client_company`";
           
                  $sql=mysqli_query($con,$z); ;
                     $num= mysqli_num_rows($sql); 
                     while($d=mysqli_fetch_assoc($sql)){ 
                         if($a===$d['user_name']){
                                    ?>
                <section class="my-5 py-5">

                        <div>
                        <h1 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);"> <?php echo $d['user_name']?></span></h1> 
                        </div>
                        <div class="w-50 m-auto">
                            <div id="profile_client">
                            <div class="row">
                            
                                <div class="col-lg-6 col-md-6    col-12">
                                                <label for=""> COMPANY REGISTRATION</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <?php echo $d['company_registration']?> </div>
                                            
                                <div class="col-lg-6 col-md-6    col-12">
                                                <label for="">COMPANY ADDRESS</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <?php echo $d['company_address']?></div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <label for=""> COMPANY PIN</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <?php echo $d['company_pin']?></div>
                                            
                                            <div class="col-lg-6 col-md-6    col-12">
                                                <label for=""> ID PROOF</label>
                                                </div>
                                                <div class=" col-md-6 col-lg-6 col-12" > <?php echo $d['id_proof']?></div>
                                            
                                            
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <label for=""> ADDRESS PROOF</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <?php echo $d['address_proof']?> </div>
                                            
                                            <div class="col-lg-6 col-md-6    col-12">
                                                <label for=""> PHOTO</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6    col-12">
                                                <?php echo $d['passport_photo']?>   </div>
                                            
                                            
                                            <div class="col-lg-6 col-md-6    col-12">
                                                <label for="">SIGNATURE</label>
                                                </div>
                                                <div class=" col-md-6 col-lg-6 col-12">  <?php echo $d['signature']?>   </div>
                                    
                                            
                            
                            </div>
                        </div>
                        </div>

                </section>
        <?php
                         }
                        echo"<br>";         
                        } 
                        ?>
                        
         
                 </div>
         
                <section  class="my-5">
                        <div class="py-5"> 
                        <h2 class="text-center">HISTORY</h2> 
                        </div>
                        <div class="main-div">
                    <h1 class="text-center">LIST OF Vehicle</h1>
                    <div class="center-div">
                    <div class="table-responsive">
                        <div class="col">  
                            <div>
                                <?php  $z="SELECT * FROM `tranporter_vehicle`";
                                $sql=mysqli_query($con,$z); ;
                                    $num= mysqli_num_rows($sql); 
                                    while($d=mysqli_fetch_assoc($sql)){ 
                                        if($b===$d['e_mail']){
                                                    ?>
                        <section class="my-5 py-5">

                                <div>
                                <h1 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">                  
                                <?php echo $a['user_name']?></span></h1> 
                                </div>
                                <div class="w-50 m-auto">
                                    <div id="profile_client">
                                    <div class="row">
                                        <div class="col-12 text-center " id="user_name"> <h4>  
                                        <?php echo $a['user_name']?></h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                                        <label for="">license</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6    col-12">
                                                        <?php echo $d['license']?> </div>
                                                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Username</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $a['user_name']?> </div> 
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Email</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $d['e_mail']?></div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> License</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $d['license']?> </div>
                                    
                                    <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Id Proof</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $d['id_proof']?> </div>
                                    <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Driving License</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <?php echo $d['driving_license']?> </div>
                                        
                                    <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Owner Book</label>
                                        </div>
                                        <div class=" col-md-6 col-lg-6 col-12"> <?php echo $d['owner_book']?></div>
                                    
                                    
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Photo</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12"> <?php echo $d['passport_photo']?>
                                        </div>      
                                        <div class="col-lg-6 col-md-6    col-12">
                                        <label for=""> Signature</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6    col-12"> <?php echo $d['signature']?>
                                        </div>      
                                    
                                    </div>
                                </div>
                                </div>

                </section>
        <?php
                         }
                        echo"<br>";         
                        } 
                        ?>
         <h1 class="text-center">NO other record found</h1 class="text-center">
                 </div>
        </div>
    </div>
</div>
     <footer>
        <p class="p-3 bg-dark text-white text-center">Copyright  Transporter | Designed by CS01</p>
    </footer>
     
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>