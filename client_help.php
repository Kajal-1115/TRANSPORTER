<?php
session_start()
?>
<?php
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$q= $_SESSION["user_name"];
$r=mysqli_query($con,"SELECT *from client where user_name='$q'");
$d=mysqli_fetch_assoc($r); 

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transporter</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
    <script type="text/javascript"  src="js/validation.js"></script>
      <script type="text/javascript"  src="js/copy.js"></script>
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
<section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">HOW CAN WE HELP?</h2> 
        </div>
        <div class="w-50 m-auto">
            <form action="admin.php" method="post">
            <div class="row">
            <div class="col-lg-6 col-md-6    col-12" id="user_name">  <label for=""> User Id</label>
             </div>
              <div class="col-lg-6 col-md-6    col-12" id="user_name"> <h4>  
             <?php echo $d['user_name']?> </h4>
             </div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">  Name</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $d['name']?></div> 
             <div class="col-lg-6 col-md-6    col-12"><label for=""> Type of Consignment</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="text"   placeholder="Consignment"   class="input-box form-control" autofocus>
                         </div></div> 
                
                <div class="form-group">
                    <label for=""> Email Id</label>
                    <input type="text" name=" email" autocomplete="off" class="form-control" >
                </div> 
                <div class="form-group">
                    <label for=""> Mobile</label>
                    <input type="text" name=" mobile" autocomplete="off" class="form-control" >
                </div>
                    
                <div class="form-group">
                    <label for="">  Query</label>
                    <textarea class="form-control"></textarea> 
                </div>
                <button type="submit" class= "btn btn-primary" >Submit</button>
            </form>
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
