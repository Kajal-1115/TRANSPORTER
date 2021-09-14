<?php
session_start() ;
  $con=@mysqli_connect("localhost","root","","transporter"); 
if(!$con)
{
	echo"Not Connected";
} 
$q= $_SESSION["user_name"]; 

$r=mysqli_query($con,"SELECT *from transporter_owner where user_name='$q'");
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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  
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
       $b=$_POST['email1']; 
       $xy="UPDATE `transporter_owner` SET  `e_mail`='$b' WHERE user_name='$q'";
       $z=mysqli_query($con,$xy); 
      if(isset($z)) 
              {    
                 
                      header("location:transporter_home.php");  
              } 
      else
      {
        $yourErr = "email not updated";
      }
    
  }
  ?>
<section>
<div class="sidebar"  style=" margin:4%; margin-top:15%; font: size 24px;; "  > 
  <a href="transporter_setting.php"> <i style='font-size:20px' class='fas'>&#xf084;</i>UPDATE PASSWORD</a> 
  <a href="transporter_mobile.php"><i style="font-size: 20px;"  class="fa">&#xf10b;</i>UPDATE MOBILE NO</a> 
  <a href="transporter_email.php"><i   style="font-size: 20px;" class="material-icons">&#xe158;</i>UPDATE EMAIL</a>
  <a href="transporter_address.php"><i style="font-size: 20px;" class="fa">&#xf2bb;</i>UPDATE ADDRESS</a>
  <a href="transporter_language.php"><i style="font-size: 20px;" class="fa">	&#xf1ab;</i>UPDATE LANGUAGE</a>
</div>
<div style="padding-left: 30%; padding-top:10%; ">
 
<h1> SETTINGS</h1>
                <hr>
                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
                <div class="row">
                  
                <div class="form-group col-6">
                    <h3> Change Your E mail</h3>
                    
                    <input type="email" class="form-control mt-1" value="<?php echo $d['e_mail']?>" readonly>
                    <input type="email" class="form-control mt-1"  name="email1"  required placeholder="Confirm Email">
                  
               
                    
                    <button  type="submit" name="submit" class="btn btn-info" type="button">Update</button>
                  </div>
                </div>
                </form>
                
              </div>
              
        
</section> 
 
<footer>
        <p class="p-3 bg-dark text-white text-center  ">Copyright  Transporter | Designed by CS01</p>
 </footer><script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>