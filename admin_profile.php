<?php 
 $con=@mysqli_connect("localhost","root","","transporter");

 if(!$con)
 {
     echo"Not Connected";
 }
 
$q="select *from admin e_mail";
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
<body style="background-color: #0001ef ;" class=" text-white">
  
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
<section class="my-5 py-5">

     <div>
     <h1 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">Admin Profile</span></h1> 
     </div>
     <div class="w-50 m-auto">
         <div id="profile_admin">
          <div class="row">
          <div class="col-6 " id="user_name"> <h4>  
             <?php echo $qr['first_name']?>  <span class="space"> <?php echo $qr['last_name'] ?></span></b></h4>
             </div>
             
             <div class="col-6 text-center" id="user_profile_pic1"><?php echo '<img height="170px" width="145px" src="image//'.$qr['photo'].'">'; ?>  </div><br>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> First Name</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $qr['first_name']?></div> 
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Last Name</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $qr['last_name']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Date Of Birth</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $qr['date_of_birth']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for="">Email</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $qr['e_mail']?></div>
             <div class="col-lg-6 col-md-6    col-12">  <label for=""> Mobile No.</label></div>
             <div class="col-lg-6 col-md-6    col-12"><?php echo $qr['mobile_number']?></div>
             <!-- <div class="col-lg-6 col-md-6    col-12"></div> -->
            
         </div>
        </div>
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