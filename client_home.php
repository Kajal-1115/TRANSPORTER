<?php
session_start()
?>
<?php
$con=mysqli_connect("localhost","root","","transporter");
	if(!$con)
	{
		echo"Not Connected";
	} 
	$a=$_SESSION["user_name"];
$ad=mysqli_query($con,"SELECT *from client where user_name='$a'");
$dk=mysqli_fetch_assoc($ad);
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
<div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="4"></li> 
        </ul>
        <div class="carousel-inner"> 
            <div class="carousel-item active">
            <img src="image/transport.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
                <h3>WELCOME </h3>
      <h1><mark class="text-dark" ><marquee ><?php echo $dk['name'] ?></marquee></mark>
                </h1> 
            </div>   
            </div>
            <div class="carousel-item">
            <img src="image/truck.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>WELCOME </h3>
      <h1><mark class="text-dark" ><marquee ><?php echo $dk['name'] ?></marquee></mark>
                </h1> 
            </div> 
            </div>
            <div class="carousel-item">
            <img src="image/take_away.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="image/pick_up.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon">   
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon">   
        </a> 
    </div>

<div class="py-5 my-5 w-50 m-auto row">
<div id="user_name" class="col-md-6 col-lg-6 col-12">
<h1><?php echo $dk["user_name"];?></h1>
</div>
<div id="user_profile_pic"class="col-md-6 col-lg-6 col-12">
  <?php echo '<img height="170px" width="145px" src="image//'.$dk['photo'].'">'; ?>
 </div> 
</div>

  <section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">Gallery</h2> 
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>


            </div>
        </div>
 </section>
      
<footer class=" fixed-bottom">
          <p class="p-3 bg-dark text-white text-center">@transportservice</p>
      </footer>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    </body>
</html>
<?php
}
?>