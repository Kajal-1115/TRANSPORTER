<?php
error_reporting(0);
  $con=@mysqli_connect("localhost","root","","transporter");

if(!$con)
{
	echo"Not Connected";
} 
$a=$_REQUEST['transporter_registration'];
$b=$_REQUEST['transporter_name'];
$c=$_REQUEST['fathers_name'];
$d=$_REQUEST['birth'];
$e=$_REQUEST['gender'];
$f=$_REQUEST['nationality'];
$g=$_REQUEST['present_state'];
$h=$_REQUEST['present_dist'];
$i=$_REQUEST['present_address'];
$j=$_REQUEST['present_pin'];
$k=$_REQUEST['permanent_state'];
$l=$_REQUEST['permanent_dist'];
$m=$_REQUEST['permanent_address'];
$n=$_REQUEST['permanent_pin'];
$o=$_REQUEST['mobile'];
$p=$_REQUEST['email'];
$q=$_REQUEST['language1'];
$r=$_REQUEST['read1'];
$s=$_REQUEST['write1'];
$t=$_REQUEST['speak1'];
$u=$_REQUEST['language2'];
$v=$_REQUEST['read2'];
$w=$_REQUEST['write2'];
$x=$_REQUEST['speak2'];
$y=$_REQUEST['language3'];
$z=$_REQUEST['read3'];
$aa=$_REQUEST['write3'];
$ab=$_REQUEST['speak3'];
$ac=$_REQUEST['uid'];
$ad=$_REQUEST['vehicle_number'];
$ae=$_REQUEST['licence'];
$af=$_REQUEST['passport_photo'];
$ag=$_REQUEST['signature'];
$ah=$_REQUEST['id_proof'];
$ai=$_REQUEST['driving_licence'];
$aj=$_REQUEST['owner_book'];
$xy="insert into transporter_owner(type,name,f_name,birth,gender,nationality,present_state,present_dist,present_address,present_pin,permanent_state,permanent_dist,permanent_address,permanent_pin,mobile_no,e_mail,language1,read1,write1,speak1,language2,read2,write2,speak2,language3,read3,write3,speak3,uid_number,vehicle_number,driving_licence_no,passport_photo,signature,id_proof,driving_licence,vehicle_owner_book) values('$a','$b','$c','$d','$e','$f','$g','$h','$i',$j,'$k','$l','$m',$n,$o,'$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab',$ac,'$ad','$ae','$af','$ag','$ah','$ai','$aj')";
mysqli_query($con,$xy);
?>
 <!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title>Transporter-Form</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href=transporter_home.php">TRANSPORTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href=transporter_home.php">Home <span class="sr-only">(current)   </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="transporter_bid.php">GO Bid <span class="sr-only">(current)   </a>
            </li>
             
            <li class="nav-item dropdown color-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More<span class="sr-only">(current) 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="transporter_profile.php">Profile</a>
                <a class="dropdown-item" href="transporter_customer_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href=" transporter_vehicle.php"> Add Vehicle</a>
                
                <a class="dropdown-item" href="transporter_album.php"> Album</a>
                <a class="dropdown-item" href="transporter_bidding.php"> Bidding</a>
                <a class="dropdown-item" href="transporter_bid.php"> Bid</a>
                
                <a class="dropdown-item" href="transporter_consignment.php"> Consignment</a>
                <a class="dropdown-item" href="transporter_message.php"> Message</a>
                
                <a class="dropdown-item"  href="transporter_setting.php"> Setting</a>
                <a class="dropdown-item"  href="transporter_history.php">History </a>
                <a class="dropdown-item"  href="transporter_help.php">Help</a>
                
                <a class="dropdown-item" href="transporter_contact_us.php">Contact us</a>
                 
                </div>
            </li> 
           
            </ul>
            <form class="form-inline my-2 my-lg-0" action="transporter_search.php">
                <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search"  >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
</nav>
<div id="transporter_body">
<div id="title"><div id="title_name"></div><div id="title_sub"></div>
</div>
<div id="transporter">
<div id="transporter_form_complete"><br />
<span class="title"><center>REGISTRATION SUCCESSFULLY COMPLETED</center></span><br /><br />
<td><center><a href="index.php"><input type="button" value="OK" class="button" /></a></center></td>
</div>
</div>
</div>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>