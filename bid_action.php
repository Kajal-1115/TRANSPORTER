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
$ac=$_POST['consignment_no'] ;
$u=$_POST['user_name'] ;
$a=$_POST['transporter_name'];
$b=$_POST['e_mail'];
$c=$_POST['mobile'];
$d=$_POST['type_of_transport'];
$e=$_POST['description'];
$f=$_POST['Delivery']; 
$g=$_POST['highest_price'];
$abc="INSERT INTO `bid`( `username`, `name`,`consignment_no`, `higest_price`, `e_mail`, `type_of_transport`, `description`, `date_of_delivery`, `mobile_no`) 
VALUES ('$u','$a','$ac','$g','$b','$d','$e','$f','$c')"; 
 $r=mysqli_query($con,$abc); 

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
<section class="my-5">
      <div class="py-5"> 
         <h2 class="text-center">successful your Bidding <br>For....</h2> 


         <h4></h4>
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name="transporter" action="bid_action.php "    method="POST" onSubmit="return call(this.form);" >
                 <div class="form-group text-white">
                    <div class="row">
                    <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> Consignment No</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php  echo $ac ; ?> </div> <br>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> Username</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php  echo $u ; ?> </div> <br>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
						<?php  echo $a ; ?>   </div>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Email</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
						<?php  echo $b; ?>   </div>
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Mobile no</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <?php  echo $c ; ?>   </div>
                       
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Highest Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
						<?php  echo $g ; ?>  </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Type of Transport</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
						<?php  echo $d ; ?>   </div>
                        
					   <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> All Description About Consignment</label>
                        </div>
                        <div class=" col-md-6 col-lg-6 col-12"type="text" ><?php  echo $e ; ?> </div>
                     
					
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Date of Delivery</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
						<?php  echo $f ; ?>  </div>

                    </div>
 <div class="col-12"> <h4>GO to   <span><a href="transporter_home.php">HOME</a></span></h4></div>
                  
                       
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