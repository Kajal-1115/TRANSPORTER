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
<body>  
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
            <li class="nav-item active">
                <a class="nav-link" href="contact_us.php">Help<span class="sr-only">  </a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
 </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="4"></li> 
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="image/transport.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">  
                <div class="carousel-caption">
                <h3>Los Angeles </h3> 
                We had such a great time in LA!</p> 
            </div>  
            </div>   
            </div>
            <div class="carousel-item">
            <img src="image/truck.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="image/take_away.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="image/pick_up.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon">   
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon">   
        </a>
    </div>
    <section  class="my-5">
        <div class="py-5">
           
         <h2 class="text-center">About us</h2> 
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6   col-12">
                <img src="image/carry_you_logistic.jpg" class="img-flude aboutimg">
            </div>
            <div class="col-lg-6 col-md-6   col-12">
               
            <p>So, We have introduce a project " THE TRANSPORTER   " to "   Indian Peoples   ". <br>
                THE TRANSPORTER     is a web-based system so fundamental features related with web-based technologies such as 
            client-server and database properties determine the software requirements of the project. The software product is a standalone system and 
            not a part of a larger system. The system will work on different modules. . The goods owners and the vehicle owners will reach the system 
            through web pages by using web-browser such as Mozilla, Internet Explorer and Google Chrome. <br>
            In this system goods owners login and places their goods for shipping and started auction for finding best transportation facility.
            Then different vehicle owner places their bids accordingly. There after among different vehicle owner they will choose the best one who
                will take minimum charges with best facilities.  
            </p> 
            </div> 
          </div>
        </div> 
    </section>
  <div class="text-center">
        <ol><h2>Objectives:-</h2>
                <li>
                Review the existing/current goods transportation process/consignment shipping process and application.
                </li>
                <li>
                 
                  Coming up an automated consignment bidding system. 
                </li>
                <li>  
                Implementing online consignment bidding system. 
                </li>
                <li>
                Validating the system to ensure that only registered users who got bidding number is allowed to use it.
                </li>
            </ol>
    </div>
        
   <section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">0ur services</h2> 
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4   col-12">
                 <div class="card"  >
                    <img class="card-img-top" src=" image/pexels-pixabay-4158.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"> abcd</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-4   col-12">
                 <div class="card"  >
                    <img class="card-img-top" src=" image/pexels-pixabay-4158.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"> abcd</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
               </div>
                <div class="col-lg-4 col-md-4   col-12">
                 <div class="card"  >
                    <img class="card-img-top" src=" image/pexels-pixabay-4158.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"> abcd</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
              </div>
            </div>
         </div>
    </section>
    <section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">Gallery</h2> 
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4   col-12">
                     <img src="image/pick_up.jpg" class="img-fluid pb-4">
                </div>


            </div>
        </div>
      </section>
      
    <section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center" > CLICK to<a href="transporter_registration.php">Register</a></h2> 
        </div>
        <div class="py-5 text-center"> 
         <h3 >FOR ANY QUERY ..........</h3>
         <h6>submit folowing details <br> we will contact you soon.... </h6> 
        </div>
        <div class="w-50 m-auto">
        <form action="contact_us_action.php" method="post">
                <div class="form-group">
                    <label for=""> User Name</label>
                    <input type="text" name=" username" required class="form-control" >
                </div>
                <div class="form-group">
                    <label for=""> Email Id</label>
                    <input type="email" name=" email" required class="form-control" >
                </div>
                <div class="form-group">
                    <label for=""> User Id</label>
                    <input type="text" name=" userid" required class="form-control" >
                </div>
                <div class="form-group">
                    <label for=""> Mobile</label>
                    <input type="number" name=" mobile" required class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">  Query</label>
                    <textarea class="form-control" name="query" id="query" ></textarea> 
                </div>
                <button type="submit" class= "btn btn-primary" >Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-white text-center">@transportservice</p>
    </footer>
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>