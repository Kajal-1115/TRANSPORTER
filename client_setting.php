<?php
session_start() ;
  $con=@mysqli_connect("localhost","root","","transporter"); 
if(!$con)
{
	echo"Not Connected";
} 
$q= $_SESSION["user_name"];
$ab= $_SESSION["password"]; 
$r=mysqli_query($con,"SELECT *from client where user_name='$q'");
$d=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" > 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
   
    </head>
<body class="bg-secondary ">
 <?php
   
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
   
	   $qu=mysqli_connect("localhost","root","","transporter");
	   if(!$qu)
	   {
		   echo "not connected";
	   } 
	   $a=$_POST['pw'];
     $abc=$_POST['pw1'];
	   $b=$_POST['passwordc'];
     if($a===$b  ){  
     $xy="UPDATE `client` SET  `password`='$a' WHERE user_name='$q'";
     $z=mysqli_query($con,$xy);
     
		if(isset($z)) 
            {    
               
                    header("location:client_home.php");  
            }
          
		else
		{
			$yourErr = "Password not updated";
		}
  }else{
    ?> <script>
    alert ("Password not same ");
  </script>
    <?php
  }
}
 ?>
<section>
<div class="sidebar"  style=" margin:4%; margin-top:15%; font: size 24px;; "  > 
  <a href="client_setting.php"> <i style='font-size:20px' class='fas'>&#xf084;</i>UPDATE PASSWORD</a> 
  <a href="client_mobile.php"><i style="font-size: 20px;"  class="fa">&#xf10b;</i>UPDATE MOBILE NO</a> 
  <a href="client_email.php"><i   style="font-size: 20px;" class="material-icons">&#xe158;</i>UPDATE EMAIL</a>
  <a href="client_address.php"><i style="font-size: 20px;" class="fa">&#xf2bb;</i>UPDATE ADDRESS</a>
  <a href="client_language.php"><i style="font-size: 20px;" class="fa">	&#xf1ab;</i>UPDATE LANGUAGE</a>
</div>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  
<div style="padding-left: 30%; padding-top:10%; ">

<h1>SECURITY SETTINGS</h1>
            <hr>
            <form method="POST" action="">
              <div class="form-group">
                
            <hr><div class="row">
              <div class="col-6">
              <label class="d-block">Change Password</label>
                
              <input type="text" class="form-control"name="pw1" hidden   placeholder="Enter your old password" value="<?php echo$d['password'] ?>">
                <input type="text" class="form-control mt-1" name="pw"placeholder="New password">
                <input type="text" class="form-control mt-1"name="passwordc" placeholder="Confirm new password">
              </div>
            </div>
                <hr>
                <button  type="submit" name="submit" class="btn btn-info" type="button">Update</button>
              </div>
            </form>
        
      
</form>
                <hr> 
</div>
</section> 
 
<footer>
        <p class="p-3 bg-dark text-white text-center ">Copyright  Transporter | Designed by CS01</p>
 </footer>
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>