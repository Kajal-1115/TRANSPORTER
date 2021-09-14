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
          
        $g=$_POST['present_state'];
        $h=$_POST['present_dist'];
        $i=$_POST['present_address'];
        $j=$_POST['present_pin'];
        $xy="UPDATE `transporter_owner` SET `present_state`='$g',`present_dist`='$h',`present_address`='$i',`present_pin`='$j'  WHERE user_name='$q'";
        $z=mysqli_query($con,$xy);
  
       if(isset($z)) 
               {    
                       header("location:transporter_home.php");  
               } 
       else
       {
         $yourErr = "Address  not updated";
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

<div style="padding-left: 25%; padding-top:10%;">
 <section>
 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
                  <div class="form-group">
                  <div class="row">
               <div class="col-lg-12 col-md-12   col-12">
                          <h1> PRESENT ADDRESS</h1>
                         </div>
                        
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for="">PRESENT STATE</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_state" name="present_state"   class="input-box form-control" required   > 
                         <option > <?php echo $d['present_state'];?>  </option>
                         <option> JHARKHAND  </option> 
                            <option>WEST BANGIOL</option>
                            <option>BIHAR</option>
                            <option>UP</option> 
                           </select> 
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for="">PRESENT DIST.</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_dist" name="present_dist"  class="input-box form-control" required   >
                         <option > <?php echo $d['present_dist'];?>  </option>
                         
                            <option>RANCHI</option>
                            <option>JAMSEDPUR</option>
                            <option>DHANBAD</option>
                            <option> BOKARO</option>
                            <option> KOLKATA</option>
                            <option>PATANA</option>
                            <option>  </option>
                          </select> 
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> ADDRESS</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" name="present_address"  id="present_pin"value="<?php echo $d['present_address'];?>"   placeholder="Full Address"  class="input-box form-control" required>
                         
                          </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> PIN</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <input type="number" id="present_pin"value="<?php echo $d['present_pin'];?>" name="present_pin" placeholder="Pin Code"  class="input-box form-control" required>
                         </div>
   </div>
                    <button  type="submit" name="submit" class="btn btn-info" type="button">Update</button>
                  </div>
                </form>
  
 </section>
      
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