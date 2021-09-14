<?php
error_reporting(0);
  $con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
}
// $a="select *from notice_board";
// $b= mysqli_query($con,$a);
// $c=mysqli_fetch_assoc($b);
// $d="select *from notification";
// $e= mysqli_query($con,$d);
// $f=mysqli_fetch_assoc($e);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR-LOGIN</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
  <body class="bg-dark"  >
 
  <?php
// define variables and set to empty values
$user_idErr = $yourErr = $passwordErr = "";
$user_id = $password = "";
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
   if($_POST["user_id"]==""||$_POST["password"]=="")
   {
   if ($_POST["user_id"]=="") 
   {
     $user_idErr = "Please Enter User Name";
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
	   $a=$_POST['user_id'];
	   $b=$_POST['password'];
	   $qu="SELECT *from admin where user_id='$a'&& password='$b'";
		$ac= mysqli_query($con,$qu);
		$ad=mysqli_fetch_assoc($ac);
		$c=$ad['user_id'];
		$d=$ad['password'];
		if($a==$c&&$b==$d)
		{
			header("location:admin_login_first.php");
		}
		else
		{
			$yourErr = "your username or password   wrong";
		}
   }
 }
?>
 
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
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
                  
                          <div class="form-group">
                              <label style=" color: white;" for=""> USER ID:</label>
                              <input type="text" id="user_id" name="user_id" class="input_login form-control" required>
                          </div> 
                          <div class="form-group">
                              <label  style=" color: white;" for=""   > PASSWORD</label>
                              <input type="password" id="password" name="password" class="input_login form-control " required>
                          </div>
                          <center><span class="error"> <?php echo $yourErr;?></span></center>
                          <center>
                              <!-- <button type="forgot" class= "btn btn-primary "value="FORGOT" >Forgot</button> -->
                              <button type="submit" class= "btn btn-primary " style="margin:15px" value="LOGIN" >Submit</button>
                          
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