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
$z=$_SESSION['user_name'];  
$mn=$_POST['c'];
$_SESSION['consignment_no']=$mn;
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
         <h2 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">BID</span></h2> 
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name="transporter" action="bid_action.php "    method="POST" onSubmit="return call(this.form);" >
                 <div class="form-group text-white">
                    <div class="row">
                    <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> Consignment No</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <input type="text" id="consignment_no" name="consignment_no" readonly title="consignment_no"  class="input-box form-control" required value="<?php echo $mn?>"><br>
                         </div> <br>

                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> Username</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <input type="text" id="user_name" name="user_name" placeholder="Username" title="Username"  class="input-box form-control" required value="<?php echo $z?>"><br>
                         </div> <br>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="text" id="transporter_name" name="transporter name" placeholder="Full Name" title="Enter Your Full Name"  class="input-box form-control" autofocus>
                         </div>

                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Email</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="email" id="e_mail" name="e_mail" placeholder="E mail" title="e_mail" class="input-box form-control" autofocus>
                         </div>
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Mobile no</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="number" id="mobile" name="mobile" placeholder="mobile" title="e_mail" class="input-box form-control" autofocus>
                         </div>
                       
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Highest Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="highest_price" name="highest_price" placeholder="Highest Price"  class="input-box form-control" required> 
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Type of Transport</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="type_of_transport" name="type_of_transport" placeholder=" Type of Transport"  class="input-box form-control" required> 
                    </div>
                        
					   <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> All Description About Consignment</label>
                        </div>
                        <div class=" col-md-6 col-lg-6 col-12"type="text" ><textarea id="description" name="description" class="input-box form-control" required></textarea></div>
                     
					
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Date of Delivery</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="date" id=" Delivery" name=" Delivery"  class="input-box form-control">
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