<?php
session_start()
?>
<?php
$con=mysqli_connect("localhost","root","","transporter");
	if(!$con)
	{
		echo"Not Connected";
	} 
	$a=$_SESSION['user_name'];
   $c="SELECT *from client  where user_name='$a'";
    $d=mysqli_query($con,$c);
$cd=mysqli_fetch_assoc($d);
//     $m="select *from consignment where user_name='$a'";
// $r=mysqli_query($con,$m); 
// $qr=mysqli_fetch_assoc($r); 

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
<body class="bg-secondary">
  
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
<section class="my-5">
      <div class="py-5"> 
         <h2 class="text-center">CONSIGNMENT </h2> 
        </div>
        
        <div class="w-50 m-auto">
            <form  id="consignment_detail" name="consignment_detail" action="consignment_action.php" class="bg-secondary" method="POST" onSubmit="return call(this.form);" >
   
                <div class="form-group">
                    <div class="row">
                    <div class="col-6 "  > <h4>    <input type="text" id="user_name" name="user_name"readonly value="<?php echo $cd['user_name']?>"   class="input-box form-control"></h4></div> 
                    <div class="col-6 "  > <?php echo '<img height="170px" width="145px" src="image//'.$cd['photo'].'">'; ?> 
             </div>
             <div class="col-lg-6 col-md-6    col-12"><label for="">  Name</label></div>
             <div  class="col-lg-6 col-md-6    col-12" >
             <input type="text" id="name" readonly name="name" value="<?php echo $cd['name']?>"   class="input-box form-control">
             </div> 
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Type of Consignment</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="text"  id="consign" name="consign"  placeholder="Consignment"   class="input-box form-control" required>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Approximate Weight of Consignment</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text"  placeholder="Weight" id="approx_weight" name="approx_weight" class="input-box form-control" required>
                    </div>
					
					   <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> All Description About Consignment</label>
                        </div>
                        <div class=" col-md-6 col-lg-6 col-12"type="text" ><textarea id="description" name="description" class="input-box form-control" required></textarea></div>
                     
					
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Base Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="price" name="price" class="input-box form-control" required>
                      </div>
                      
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Date of Delivery</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="date" id=" delivery" name=" delivery"  class="input-box form-control" required>
                      </div>
                      
                      
					  <div class="col-lg-6 col-md-6    col-12">
                         <label for="">Place of Delivery</label>
                        </div>
                        <div class=" col-md-6 col-lg-6 col-12"id="place" name="place" ><textarea id="place" name="place" class="input-box form-control" required></textarea></div>
              
                           <div class="col-lg-6 col-md-6    col-12 ">
                           <button type="reset" id="reset" class= "btn btn-primary form " style="margin:15%;"value="LOGIN" >RESET</button>
                           </div> 
                           <div class="col-lg-6 col-md-6    col-12 ">
                           <button type="submit" id="submit" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="LOGIN" >SUBMIT</button>
                        
                           </div>
                           
                  
                </div> 
            </form>
           
            </div>
        </div>
</section>
    
     
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 
    <?php  
        }
    ?>
 
