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
<body style="background-color: #0001ef ;">
  
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
                <a class="dropdown-item" href="transporter_customer_profile.php">Cust. Profile</a>
                
                <a class="dropdown-item"href="  transporter_vehicle.php"> Add Vehicle</a>
                
                <a class="dropdown-item" href=" transporter_album.php"> Album</a>
                <a class="dropdown-item" href=" transporter_bidding.php"> Bidding</a>
                <a class="dropdown-item" href=" transporter_bid.php"> Bid</a>
                
                <a class="dropdown-item" href="transporter_consignment.php"> Consignment</a>
                 
                
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
         <h2 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">REGISTRATION</span></h2> 
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name=transporter" action="transporter_action.php"  method="post" onSubmit="return call(this.form);" >
  
                <div class="form-group text-white">
                    <div class="row">
                        <div class="col-lg-6 col-md-6    col-12">
                        <label for=""> TYPE OF REGISTRATION</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" readonly id="transporter_registration" name="transporter_registration" value="TRANSPORTER"  autocomplete="off"  class="input-box form-control">
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> NAME</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                         <input type="text" id="client_name" name="client_name" placeholder="Full Name" title="Enter Your Full Name"  class="input-box form-control" autofocus>
                         </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> DATE OF BIRTH</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="date" id="birth" name="birth"  class="input-box form-control">
                      </div>
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> GENDER</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <select >
                            <option value=""> SELECT</option>
                            <option value="male"> MALE</option>
                            <option value="female">FEMALE</option>
                            <option value="other">OTHER</option>
                        </select>
                    </div>
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> NATIONALITY</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="nationality" name="nationality" placeholder="Nationality"  class="input-box form-control">
                     </div>
                         <div class="col-lg-12 col-md-12   col-12">
                         <h1> PRESENT ADDRESS</h1>
                        </div>
                        
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PRESENT STATE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_state" name="present_state"  class="input-box form-control">
                            <option>Select</option>
                            <option> JHARKHAND  </option> 
                            <option>KOLKATA</option>
                            <option>BIHAR</option>
                            <option>ODISHA</option> 
                           </select> 
                         </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PRESENT DIST.</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_dist" name="present_dist"  class="input-box form-control">
                            <option>Select</option>
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
                        <textarea name="present_address" rows="5" cols="30" id="present_address" name="present_address" placeholder="Full Address" class="form-control input-box1"></textarea>
                         </div>
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> PIN</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="present_pin" name="present_pin" placeholder="Pin Code"  class="input-box form-control">
                    </div>
                    <div class="col-lg-12 col-md-12   col-12">
                         <h1> PERMANENT STATE</h1>
                        </div>
                       
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PERMANENT STATE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_state" name="present_state"  class="input-box form-control">
                            <option>Select</option>
                            <option> JHARKHAND  </option> 
                            <option>KOLKATA</option>
                            <option>BIHAR</option>
                            <option>ODISHA</option> 
                           </select> 
                         </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PERMANENT DIST.</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_dist" name="present_dist"  class="input-box form-control">
                            <option>Select</option>
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
                         <label for="">PERMANENT ADDRESS</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <textarea name="present_address" rows="5" cols="30" id="present_address" name="present_address" placeholder="Full Address" class="form-control input-box1"></textarea>
                         </div>
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> PIN</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="present_pin" name="present_pin" placeholder="Pin Code"  class="input-box form-control">
                    </div>
                        
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> MOBILE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="mobile" name="mobile" placeholder="Mobile Number"  class="input-box form-control">
                    </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">E-MAIL</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="email" id="email" name="email" placeholder="Email Id"  class="input-box form-control">
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">CHOOSE PASSWORD</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="choose_pw" name="choose_pw" placeholder="Choose Password"  class="input-box form-control">
                    </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">CONFIRM YOUR PASSWORD</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="confirm_pw" name="confirm_pw" placeholder="Confirm Your Password"  class="input-box form-control"> 
                    </div>
                    <div class="col-lg-12 col-md-12   col-12">
                         <h1> LANGUAGE KNOWN</h1>
                        </div>
                     <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language1" name="language1"  class="input-box form-control"></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read1" name="read1" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write1" name="write1" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak1" name="speak1" value="Speak"  class="checkbox  ">
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language1" name="language1"  class="input-box form-control"></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read2" name="read2" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write2" name="write2" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak2" name="speak2" value="Speak"  class="checkbox  ">
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language3" name="language3"  class="input-box form-control"></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read1" name="read1" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write3" name="write3" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak3" name="speak3" value="Speak"  class="checkbox  ">
                       </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> UID NUMBER.</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="uid" name="uid" placeholder="UID Number"  class="input-box form-control">
                      </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Type of Consignment</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="Type of Consignment" name="Type of Consignment" placeholder="Type of Consignment"  class="input-box form-control"> 
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Approximate Weight of Consignment</</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="Approximate Weight of Consignment" name="Approximate Weight of Consignment" placeholder="Approximate Weight of Consignment"  class="input-box form-control">
                      </div>
                      <div class="col-lg-6 col-md-6   col-12">
                      <label for="">All Description About Consignment</</label>
                      </div>
                      <div class="col-lg-6 col-md-6  col-12">
                      <input type="text" id="All Description About Consignment" name="All Description About Consignment" placeholder="All Description About Consignment" class="input-box form-control">
                      </div>
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Base Price</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="base Price" name="Base Price" placeholder="Base Price"  class="input-box form-control">
                      </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> Selected Transpoter</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="Selected Transpoter" name="Selected Transpoter" placeholder="Selected Transpoter"  class="input-box form-control"> 
                    </div>
                     </div>
                    </div>
                    <center>
                           <div class="col-lg-6 col-md-6    col-6">
                           <button type="reset" id="reset" class= "btn btn-primary form "value="LOGIN" >RESET</button>
                           <button type="submit" id="submit" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="LOGIN" >SUBMIT</button>
                        
                           </div>
                         
                           <div class="col-lg-6 col-md-6    col-">
                          
                          </div>
                        </center>
                      <!-- <div>
                      <input type="reset" id="reset" name="reset" class="button">
                      <input type="submit" id="submit" name="submit" value="Submit" class="button">
                      </div> -->
                       
                </div>
               <center></center>
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