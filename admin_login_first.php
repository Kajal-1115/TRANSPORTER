<?php
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
}
  
$a=$_SESSION["user_id"];
$q="select *from admin where user_id='$a'";
$r=mysqli_query($con,$q);
$qr=mysqli_fetch_assoc($r);
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
<body class="bg-dark"  >
 
     
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
                <a class="nav-link" href="go_bid.php">GO Bid <span class="sr-only">(current)   </a>
            </li>
             
            <li class="nav-item dropdown color-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More<span class="sr-only">(current) 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="cust_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href="transporter_transporter.php"> Transporter</a>
                
                <a class="dropdown-item" href="transporter_album.php"> Album</a>
                
                <a class="dropdown-item" href="transporter_message.php"> Message</a>
                
                <a class="dropdown-item"  href="transporter_setting.php"> Setting</a>
                <a class="dropdown-item"  href="history.php">History   </a>
                <a class="dropdown-item"  href="help.php">Help   </a>
                <a class="dropdown-item"  href="logout.php">Logout   </a>
              
                </div>
            </li>
            <li><a href="client_message.php">
 
            </a></li>
           
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
</nav>
 <section  class="my-5 " id="">
        <div class="py-5"> 
         <h2 class="text-center" style=" color: white;"> ADMIN LOGIN</h2> 
        </div>
      <center>
      <div class="container-fluid bf">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-2   "></div>
                <div class="col-lg-6 col-md-6   col-8 ">
                 <div class="card"  >
                     
                    <div class="card-body bg-secondary">
                    <form action="admin_profile.php" method="post">
                 
                        <div class="form-group">
                            <label style=" color: white;" for=""> WELCOME</label>
                         <?php echo $qr['first_name']?> <?php echo $qr['last_name']?> 
 
                        </div> 
                        <div class="form-group">
                            
                            <?php echo '<img height="170px" width="145px" src="image//'.$qr['photo'].'">'; ?>
                        </div>
                  
                        <div class="col-lg-3 col-md-3 col-2  "></div>
                     </form>   
                   </div>
                 </div>
               </div>
                
            </div>
         </div>
      </center>
    </section>
    




 <footer class=" fixed-bottom">
        <p class="p-3 bg-dark text-white text-center">@transportservice</p>
    </footer>
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>