<?php
error_reporting(0);
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$a=$_POST['user_id'];
$b=$_POST['password'];
$e="select *from consignment";
$f=mysqli_query($con,$e);
$ef=mysqli_fetch_assoc($f);
$x=$ef['type_cons'];
$q="select *from transporter_owner where user_name='$a'";
$r=mysqli_query($con,$q);
$qr=mysqli_fetch_assoc($r);
$c=$qr['user_name'];
$d=$qr['password'];
if($a==$c&&$b==$d);
else
{
	header("location:user_login.php");
}
?>
<!DOCTYPE> 
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
        <a class="navbar-brand" href="home.php">TRANSPORTER</a>
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
         <h2 class="text-center"> TRANSPORTER BIDDING</h2> 
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name="transporter" action="transporter_go_bid_action.php" class="bg-secondary" method="post" onSubmit="return call(this.form);" >
   
                <div class="form-group">
                    <div class="row">
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> My PRICE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="myprice" placeholder="My Price"  class="input-box form-control">
                        
                           <button type="submit" id="price" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="SUBMIT" >SUBMIT</button>
                          </div>
                   
					<div class="col-lg-6 col-md-6    col-12">
                         <label for="">CONSIGNMENT LIST</label>
                        </div>
                      
                      
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">User_Id</label></div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" name="User_Id"   placeholder="User_Id" id="User_Id"  class="input-box form-control" value="<?php echo "$a"?>" hidden>
                      </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PASSWORD</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="Password" name="Password" placeholder="Password"  class="input-box form-control" value="<?php echo "$b"?>" hidden>
						   </div> 
                           <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> </label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text"  id="cons" name="cons"    class="input-box form-control" value="<?php echo "$x"?>" hidden>
						   </div> 
                          <div class="col-lg-6 col-md-6    col-12">
                        <button type="submit" id="submit" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="<?php echo $ef['type_cons']?>" >SUBMIT</button>
                          </div>
                          <input type="text" id="cons" name="cons" value="<?php echo "$x"?>" hidden>

                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">Highest Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="Highest_Price"  placeholder="Highest Price"  class="input-box form-control">
                    </div>
                   
                    </div>
                  <div class="row">
                  <div  class="col-md-6 col-lg-6 col-12">
                    <h1><?php echo $qr['name']?></h1>
                    </div>
                    <div  class="col-md-6 col-lg-6 col-12">
                        <?php echo '<img height="170px" width="145px" src="image//'.$qr['passport_photo'].'">'; ?>
                    </div></div>
                       
                </div>
               <center></center>
            </form>
        </div>
     </section>
  
     
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
