<?php
session_start();
?>
<?php
error_reporting(0);
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
} 
$a="select *from notice_board";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);
$d="select *from notification";
$e=mysqli_query($con,$d);
$f=mysqli_fetch_assoc($e);
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
          <a class="navbar-brand" href="client_home.php">TRANSPORTER</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">   
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="client_home.php">Home <span class="sr-only">(current)   </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Register<span class="sr-only">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="client_registration.php">Client</a>
                  
                  <a class="dropdown-item" href="transporter_registration.php">Transporter</a> 
                  </div>
              </li>
            
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login <span class="sr-only">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="client_login.php">Client</a>
                  <a class="dropdown-item" href="admin_login.php">Admin</a>
                  
                  <a class="dropdown-item" href="transporter_login.php">Transporter</a> 
                  </div>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="contact_us.php">Contact us <span class="sr-only">(current)   </a>
              </li>
              
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
</nav>
<?php
// define variables and set to empty values
$user_nameErr = $yourErr = $passwordErr = "";
$user_name = $password = "";
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
   if($_POST["user_name"]==""||$_POST["password"]=="")
   {
   if ($_POST["user_name"]=="") 
   {
     $user_nameErr = "Please Enter User Name";
   }
    if($_POST["password"]=="") 
   {
     $passwordErr = "Please Enter Password";
   } 
  }
   else
   {
	   $qu=mysqli_connect("localhost","root","","transporter");
	   if(!$qu)
	   {
		   echo "not connected";
	   }
	   mysqli_select_db( $qu,"transporter");
	   $a=$_POST['user_name'];
	   $b=$_POST['password'];
	   $qu="SELECT *from client where user_name='$a'&& password='$b'";
		$ac= mysqli_query($con,$qu);
		$ad=mysqli_fetch_assoc($ac);
		$c=$ad['user_name'];
		$d=$ad['password'];
    $da=$ad['photo'];  
    $_SESSION['user_name']=$c;
    $_SESSION['password']=$d; 
    $_SESSION['photo']=$da;
		if($a==$c&&$b==$d  ) 
            {    
                
                    header("location:client_home.php"); 
                
                   
            }
          
		else
		{
			$yourErr = "your username or password   wrong";
		}
   }
 }
?>
                
 <section  class="my-5 ">
        <div class="py-5"> 
         <h2 class="text-center" style=" color: white;"> CLIENT LOGIN</h2> 
        </div>
      <center>
      <div class="container-fluid bf">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-2   "></div>
                <div class="col-lg-6 col-md-6   col-8 ">
                 <div class="card"  >
                     
                    <div class="card-body bg-secondary">
                    <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                 
                        <div class="form-group">
                            <label style=" color: white;" for=""> USER ID:</label>
                            <input type="text" id="user_name" name="user_name" class="input_login form-control   " >
                        </div> 
                        <div class="form-group">
                            <label  style=" color: white;" for=""   > PASSWORD:</label>
                            <input type="password" id="password" name="password" class="input_login form-control "required>
                        </div>
                        <center><span class="error"> <?php echo $yourErr;?></span></center>
                        <center>
                            <button type="forgot"name="forgot" class= "btn btn-primary "value="LOGIN" >Forgot</button>
                            <button type="submit" name="submit" class= "btn btn-primary " style="margin:15px" value="LOGIN" >Submit</button>
                        
                        </center>
                        <div class="col-lg-3 col-md-3 col-2  "></div>
                     </form>   
                   </div>
                 </div>
               </div>
                
            </div>
         </div>
                
        <div id="notification">
        </div>
        <div id="notice_title"><span class="notice text-white" >NOTICE</span></div>
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