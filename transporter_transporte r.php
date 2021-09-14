<?php
session_start();
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$a=$_SESSION["user_name"];
// $q="select *from tem mail";
// $r=mysqli_query($con,$q);
// $qr=mysqli_fetch_assoc($r);
// $a=$qr['mail'];
$b="select *from transporter_owner where user_name='$a'";
$c=mysqli_query($con,$b);
$d=mysqli_fetch_assoc($c);
$e=$d['name'];
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
                
                <a class="dropdown-item" href="transporter_consignment.php"> Consignment</a>
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
       <h2 class="text-center">TRANSPORTER ALBUM</h2> 
      </div>
      <div class="w-50 m-auto">
          <form  id="transporter" name="transporter" action="transporter_action.php" class="bg-secondary" method="post" onSubmit="return call(this.form);" >
 
              <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6 col-md-6    col-12">
                      <label for=""> </label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <input type="text" readonly id="transporter_registration" name="transporter_registration" value="TRANSPORTER"  autocomplete="off"  class="input-box form-control">
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> NAME</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                          <?php echo $d['name']?> </div>
                      <!-- <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> FATHER'S NAME</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                    
                      </div> -->
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> DATE OF BIRTH</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['birth']?>
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> GENDER</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['gender']?>
                  </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> NATIONALITY</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['nationality']?> </div>
                       <div class="col-lg-12 col-md-12   col-12">
                       <h1> PRESENT ADDRESS</h1>
                      </div>
                      
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for="">PRESENT STATE</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">   
                      <?php echo $d['present_state']?>
                       </div>
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for="">PRESENT DIST.</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">   
                      <?php echo $d['present_dist']?>
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> ADDRESS</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['present_address']?> </div>
                    <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> PIN</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['present_pin']?> </div>
                  <div class="col-lg-12 col-md-12   col-12">
                       <h1> PERMANENT STATE</h1>
                      </div>
                     
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for="">PERMANENT STATE</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">   
                      <?php echo $d['permanent_state']?> 
                       </div>
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for="">PERMANENT DIST.</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">   
                      <?php echo $d['permanent_dist']?>  
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       <label for="">PERMANENT ADDRESS</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['permanent_address']?>  </div>
                    <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> PIN</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['permanent_pin']?> </div>
                      
                      <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> MOBILE</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['mobile_no']?>  </div>
                   <div class="col-lg-6 col-md-6    col-12">
                       <label for="">E-MAIL</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['e_mail']?>  </div>
               
                  <div class="col-lg-12 col-md-12   col-12">
                       <h1> LANGUAGE KNOWN</h1>
                      </div>
                   <div class="col-lg-6 col-md-6    col-12">
                   <?php echo $d['language1']?>     </div>
                   <div class="col-lg-6 col-md-6    col-12">
                     <?php echo $d['language2']?> </div>
                     <div class="col-lg-6 col-md-6    col-12">
                     <?php echo $d['language3']?> </div>
                   <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> UID NUMBER.</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['uid_number']?>    </div>
                   <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> VEHICLE NUMBER</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['vehicle_number']?> </div>
                  <div class="col-lg-6 col-md-6    col-12">
                       <label for=""> DRIVING LICENCE NO.</</label>
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                      <?php echo $d['driving_licence_no']?> </div>
                      <div id="user_name">
                          <h1><?php echo"$e"?></h1>
                          </div>
                          <div id="user_profile_pic1">
                          <?php echo '<img height="200px" width="175px" src="image//'.$d['passport_photo'].'">'; ?>
                       </div>
              </div>
                     
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
