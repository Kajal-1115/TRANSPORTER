<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transporter</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" > 
      <script type="text/javascript"  src="js/copy.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
 
    </head>
<body style="background-color: #0001ef ;">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="home.php">TRANSPORTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
             
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
             
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
</nav>
<section class="my-5">
      <div class="py-5"> 
         <h2 class="text-center"><span  style="background-image: repeating-linear-gradient( 45deg,white 3% ,   blue 4%);">REGISTRATION</span></h2> 
        </div>
        <div class="w-50 m-auto">
            <form  id="transporter" name="transporter" action="transporter_registration_action.php"    method="post" onSubmit="return call(this.form);" >
                 <div class="form-group text-white">
                    <div class="row">
                        <div class="col-lg-6 col-md-6    col-12">
                            <label for=""> TYPE OF REGISTRATION</label>
                            </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <input type="text" readonly id="transporter_registration" name="transporter_registration" value="TRANSPORTER"  autocomplete="off"  class="input-box form-control" >
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> NAME</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <input type="text" id="transporter_name" name="transporter_name" placeholder="Full Name" title="Enter Your Full Name"  class="input-box form-control" required autofocus>
                         </div> <br>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> FATHER'S NAME</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                           <input type="text" id="fathers_name" name="fathers_name" placeholder="Father's Name"  class="input-box form-control" required>
                          </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> DATE OF BIRTH</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                           <input type="date" id="birth" name="birth"  class="input-box form-control" required>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> GENDER</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                            <select id="gender" name="gender">
                                <option value="male"> MALE</option>
                                <option value="female">FEMALE</option>
                                <option value="other">OTHER</option>
                             </select>
                          </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for=""> NATIONALITY</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                           <input type="text" id="nationality" name="nationality" placeholder="Nationality"  class="input-box form-control" required>
                          </div>
                        <div class="col-lg-12 col-md-12   col-12">
                          <h1> PRESENT ADDRESS</h1>
                         </div>
                        
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for="">PRESENT STATE</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_state" name="present_state"  class="input-box form-control" required   > 
                            <option> JHARKHAND  </option> 
                            <option>WEST BANGIOL</option>
                            <option>BIHAR</option>
                            <option>ODISA</option> 
                           </select> 
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                          <label for="">PRESENT DIST.</label>
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="present_dist" name="present_dist"  class="input-box form-control" required   >
                            
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
                          <input type="number" id="present_pin" name="present_pin" placeholder="Pin Code"  class="input-box form-control" required>
                         </div>
                         <div class="col-lg-6 col-md-6    col-12"><label for="">Click on Check box Permanent address same.</label></div>
                         <div class="col-lg-6 col-md-6    col-12"><input type="checkbox" name="check_address" onClick="same(this.form)" class="checkbox  form-control"></div> <br>
         
                    <div class="col-lg-12 col-md-12   col-12">
                         <h1> PERMANENT STATE</h1>
                        </div>
                       
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PERMANENT STATE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="permanent_state" name="permanent_state"  class="input-box form-control" required   >
                            
                            <option> JHARKHAND  </option> 
                            <option>WEST BANGIOL</option>
                            <option>BIHAR</option>
                            <option>UP</option> 
                           </select> 
                         </div><br>
                       
                         <div class="col-lg-6 col-md-6    col-12">
                         <label for="">PERMANENT DIST.</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">   
                         <select id="permanent_dist" name="permanent_dist"  class="input-box form-control" required   >
                            
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
                        <textarea name="permanent_address" rows="5" cols="30" id="permanent_address" name="present_address" placeholder="Full Address" class="form-control input-box1"></textarea>
                         </div>
                      <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> PIN</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="permanent_pin" name="permanent_pin" placeholder="Pin Code"  class="input-box form-control" required>
                    </div>
                    <br><br>
                        
                        <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> MOBILE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="mobile" name="mobile" placeholder="Mobile Number"  class="input-box form-control" required>
                    </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">E-MAIL</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="email" id="email" name="email" placeholder="Email Id"  class="input-box form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">CHOOSE PASSWORD</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="choose_pw" name="choose_pw" placeholder="Choose Password"  class="input-box form-control" required>
                    </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for="">CONFIRM YOUR PASSWORD</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="confirm_pw" name="confirm_pw" placeholder="Confirm Your Password"  class="input-box form-control" required> 
                    </div>
                    <div class="col-lg-12 col-md-12   col-12">
                         <h1> LANGUAGE KNOWN</h1>
                        </div>
                     <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language1" name="language1"  class="input-box form-control" required></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read1" name="read1" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write1" name="write1" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak1" name="speak1" value="Speak"  class="checkbox  ">
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language2" name="language2"  class="input-box form-control" required></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read2" name="read2" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write2" name="write2" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak2" name="speak2" value="Speak"  class="checkbox  ">
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                     <input type="text" id="language3" name="language3"  class="input-box form-control" required></td><td>:
                         </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        Read<input type="checkbox" id="read3" name="read3" value="Read"  class="checkbox  ">
                         Write<input type="checkbox" id="write3" name="write3" value="Write"  class="checkbox  ">
                         Speak<input type="checkbox" id="speak3" name="speak3" value="Speak"  class="checkbox  ">
                       </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> UID NUMBER.</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="number" id="uid" name="uid" placeholder="UID Number"  class="input-box form-control" required>
                      </div>
                     <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> VEHICLE NUMBER</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="vehicle_number" name="vehicle_number" placeholder="Vehicle Number"  class="input-box form-control" required> 
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> DRIVING LICENCE NO.</</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="text" id="licence" name="licence" placeholder="Driving Licence Number"  class="input-box form-control" required>
                      </div>
                      <div class="col-lg-12 col-md-12   col-12">
                         <h1> UPLOAD YOUR DOCUMENT...</h1>
                        </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> PASSPORT PHOTO</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="passport_photo" name="passport_photo"  class="input-box form-control"  >
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">SIGNATURE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="signature" name="signature"  class="input-box form-control"  >
                    </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for=""> ID PROOF</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="id_proof" name="id_proof"  class="input-box form-control"  >
                     </div>
                    <div class="col-lg-6 col-md-6    col-12">
                         <label for="">DRIVING LICENCE</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="driving_licence" name="driving_licence"  class="input-box form-control"  >
                       </div>
                       <div class="col-lg-6 col-md-6    col-12">
                         <label for="">VEHICLE OWNER BOOK</label>
                        </div>
                        <div class="col-lg-6 col-md-6    col-12">
                        <input type="file" id="owner_book" name="owner_book"  class="input-box form-control"  >
                     </div>
                    </div>
                    <center>
                           <div class="col-lg-6 col-md-6    col-6 ">
                           <button type="reset" id="reset" class= "btn btn-primary form "value="LOGIN" >RESET</button>
                           <button type="submit" id="submit" class= "btn btn-primary form   "  style="margin:15%;" name="submit" value="LOGIN" >SUBMIT</button>
                        
                           </div>
                         
                           <div class="col-lg-6 col-md-6    col-">
                          
                          </div>
                        </center>
                  
                       
                </div> 
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