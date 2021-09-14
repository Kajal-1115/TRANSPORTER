<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type=" text/css" href="style/style.css" >
    <script type="text/javascript"  src="js/validation.js"></script>
      <script type="text/javascript"  src="js/copy.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
 
    </head>
<body class="bg-secondary">
  
<section  class="my-5">
        <div class="py-5"> 
         <h2 class="text-center">HOW CAN WE HELP?</h2> 
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
        <p class="p-3 bg-dark text-white text-center"></p>
    </footer>
     
    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
     <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
