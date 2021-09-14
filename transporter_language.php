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
 
          $qa=$_POST['language1'];
          $r=$_POST['read1'];
          $s=$_POST['write1'];
          $t=$_POST['speak1'];
          $u=$_POST['language2'];
          $v=$_POST['read2'];
          $w=$_POST['write2'];
          $x=$_POST['speak2'];
          $y=$_POST['language3'];
          $z=$_POST['read3'];
          $aa=$_POST['write3'];
          $ab=$_POST['speak3'];
        $xy="UPDATE `transporter_owner` SET `language1`='$qa',`read1`=' $r',`write1`='$s',`speak1`='$t',`language2`='$u',`read2`='$v',`write2`='$w',`speak2`='$x',`language3`='$y',`read3`='$z',`write3`='$aa',`speak3`='$ab'  WHERE user_name='$q'";
        $z=mysqli_query($con,$xy);
  
       if(isset($z)) 
               {    
                       header("location:transporter_home.php");  
               } 
       else
       {
         $yourErr = "Language  not updated";
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
<div style="padding-left: 32%; padding-top:10%;">
 
<h1> SETTINGS</h1>
                <hr>
                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
                 <div class="row">
                   
                  <div class="form-group col-9">
                    <h3> Update Your Language</h3></div>
                    
                    <div class="col-lg-12 col-md-12   col-12">
                        <h5> LANGUAGE KNOWN</h5>
                       </div>
                    <div class="col-lg-6 col-md-6    col-12">
                    <input type="text" id="language1" name="language1"value="<?php echo$d['language1'] ?>"  class="input-box form-control" required> 
                        </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       Read<input type="checkbox" id="read1" name="read1" value="Read"  class="checkbox  ">
                        Write<input type="checkbox" id="write1" name="write1" value="Write"  class="checkbox  ">
                        Speak<input type="checkbox" id="speak1" name="speak1" value="Speak"  class="checkbox  ">
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                    <input type="text" id="language2" name="language2"  class="input-box form-control"value="<?php echo$d['language2'] ?>" required> 
                        </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       Read<input type="checkbox" id="read2" name="read2" value="Read"  class="checkbox  ">
                        Write<input type="checkbox" id="write2" name="write2" value="Write"  class="checkbox  ">
                        Speak<input type="checkbox" id="speak2" name="speak2" value="Speak"  class="checkbox  ">
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                    <input type="text" id="language3" name="language3"  class="input-box form-control"value="<?php echo$d['language3'] ?>" required> 
                        </div>
                       <div class="col-lg-6 col-md-6    col-12">
                       Read<input type="checkbox" id="read3" name="read3" value="Read"  class="checkbox  ">
                        Write<input type="checkbox" id="write3" name="write3" value="Write"  class="checkbox  ">
                        Speak<input type="checkbox" id="speak3" name="speak3" value="Speak"  class="checkbox  ">
                      </div>
                      <button  type="submit" name="submit" class="btn btn-info" type="button">Update</button>
                   
                 </div>
                <hr> 
                    
                </form>
              
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