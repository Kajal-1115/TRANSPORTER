<?php
session_start()
?>
<?php
$con=mysqli_connect("localhost","root","", "transporter");
	if(!$con)
	{
		echo"Not Connected";
	} 
	$a=$_SESSION["user_name"];
$r=mysqli_query($con,"SELECT *from consignment where user_name='$a'");
$qr=mysqli_fetch_assoc($r);
$c="select *from client where user_name='$a'";
$d= mysqli_query($con,$c);
$cd=mysqli_fetch_assoc($d);
 
{
?>
 <!DOCTYPE html>
<html lang="en"> 
<title>CONSIGNMENT</title>
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
                
                <a class="dropdown-item"href="client_company.php"> Add Company</a>
                
                <a class="dropdown-item" href="client_album.php"> Album</a>
                <a class="dropdown-item" href="client_bidding.php"> Bidding</a>
                 
                
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
                </div>
            </li> 
           
            </ul>
            <form class="form-inline my-2 my-lg-0" action="client_search.php">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search"  >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
</nav>
<section class="m-auto w-50">
        <div id="body_2">  
            <div id="consignment">      
            <h1><?php echo $cd['type']?></h1>   
                <form id="consignment_detail" name="consignment_detail" method="post" action="Consignment_action.php">
                    <div class="row py-5 my-5 " cellspacing="12">
                    
                        <div id="user_name" class=" col-md-6 col-lg-6 col-12">
                        <h1><?php echo $cd['name']?></h1>  </div>
                        <div id="user_profile_pic1" class=" col-md-6 col-lg-6 col-12">
                        <?php echo '<img height="170px" width="145px" src="image//'.$cd['photo'].'">'; ?> </div>
                        
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">Type of Consignment</label></div>
                        <div class=" col-md-6 col-lg-6 col-12"><input type="text" id="consign" name="consign" class="input-box"></div>
                         
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">Approximate Weight of Consignment</label></div>
                        <div class=" col-md-6 col-lg-6 col-12"><input type="text" id="approx_weight" name="approx_weight" class="input-box"></div>
                         
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">All Description About Consignment</label></div> 
                        <div class=" col-md-6 col-lg-6 col-12"><textarea id="description" name="description"   class="input-box2"></textarea></div>
                         
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">Base Price</label></div>
                        <div class=" col-md-6 col-lg-6 col-12"><input type="text" id="price" name="price" class="input-box"></div>
                         
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">Date of Delivery</label></div>
                        <div class=" col-md-6 col-lg-6 col-12"><input type="date" id="delivery" name="delivery" class="input-box"></div>
                         
                        <div class=" col-md-6 col-lg-6 col-12"><label for="">Place of Delivery</label></div> 
                        <div class=" col-md-6 col-lg-6 col-12"><textarea id="place" name="place" class="input-box"></textarea></div>
                        
                        <div class="col-12 text-center"> <input type="submit" id="submit" name="submit" class="button"> </div>
                        
                    </div >
                </form>
                <div class="row">
             <div class="col-6 " id="user_name"> <h4>  
             <?php echo $d['user_name']?></h4>
             </div>
             
             <div class="col-6 text-center" id="user_profile_pic1">    <?php echo '<img height="170px" width="145px" src="image//'.$d['photo'].'">'; ?>
             </div>
            </div>
            </

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
