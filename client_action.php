<?php
error_reporting(0);
$con=@mysqli_connect("localhost","root","","transporter");
if(!$con)
{
	echo"Not Connected";
} 
$a=$_POST['client_registration'];
$b=$_POST['client_name'];
$c=$_POST['fathers_name'];
$d=$_POST['birth'];
$e=$_POST['gender'];
$f=$_POST['nationality'];
$g=$_POST['present_state'];
$h=$_POST['present_dist'];
$i=$_POST['present_address'];
$j=$_POST['present_pin'];
$k=$_POST['permanent_state'];
$l=$_POST['permanent_dist'];
$m=$_POST['permanent_address'];
$n=$_POST['permanent_pin'];
$o=$_POST['mobile'];
$p=$_POST['email'];
$q=$_POST['language1'];
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
$ac=$_POST['uid'];
$ad=$_POST['company_registration'];
$ae=$_POST['company_address'];
$af=$_POST['company_pin'];
$ag=$_POST['photo'];
$ah=$_POST['signature'];
$ai=$_POST['id_proof'];
$aj=$_POST['address_proof'];
$xy="insert into client(type,name,fathers_name,birth,gender,nationality,present_state,present_dist,present_address,present_pin,permanent_state,permanent_dist,permanent_address,permanent_pin,mobile,email,language1,read1,write1,speak1,language2,read2,write2,speak2,language3,read3,write3,speak3,uid,company_registration,company_address,company_pin,photo,signature,id_proof,address_proof)
 values('$a','$b','$c','$d','$e','$f','$g','$h','$i',$j,'$k','$l','$m',$n,$o,'$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab',$ac,'$ad','$ae',$af,'$ag','$ah','$ai','$aj')";
 mysqli_query($con,$xy);
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title>Client-Form</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body> 
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
            <li class="nav-item active">
                <a class="nav-link" href="client_bid.php">GO Bid <span class="sr-only">(current)   </a>
            </li>
             
            <li class="nav-item dropdown color-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More<span class="sr-only">(current) 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="client_profile.php">Profile</a>
                <a class="dropdown-item" href="cust_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href="client_company.php"> Add Company</a>
                
                <a class="dropdown-item" href="client_album.php"> Album</a>
                <a class="dropdown-item" href="client_bidding.php"> Bidding</a>
                 
                
                <a class="dropdown-item" href="consignment.php"> Consignment</a> 
                
                <a class="dropdown-item"  href="client_setting.php"> Setting</a>
                <a class="dropdown-item"  href="client_history.php">History </a>
                <a class="dropdown-item"  href=" client_galary.php">Galary</a> 
                <a class="dropdown-item" href="contact_us.php">Contact us</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
                 
                </div>
            </li> 
           
            </ul>
            <form class="form-inline my-2 my-lg-0" action="client_search.php">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search"  >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
</nav>
<div id="client_form_complete"> 
<span class="title"><center>REGISTRATION SUCCESSFULLY COMPLETED</center></span> 
 <center><a href="index.php"><input type="button" value="OK" class="button" /></a></center> 
</div>
 
 
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
