<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Skill Quest - Register</title>
    <base href="http://skillquest.eu1.frbit.net">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <?php include('header.php');?>
    <div class="clear"></div>
    <div class="container wrap">


        <div class="wrap-register">
          <form class="section form-register" role="form" method="post" action="register">
            <h2 class="form-register-heading">Register</h2>
            <input type="text" class="form-control" placeholder="Student's Name" required="" autofocus="">
            <input type="text" class="form-control" placeholder="Parent's Name" required="">
            <input type="text" class="form-control" placeholder="Mobile Number" required="" autofocus="">
            <input type="email" class="form-control" placeholder="Email Address" required="">
            <input type="text" class="form-control" placeholder="Username" required="">
            <input type="password" class="form-control" placeholder="Password" required="">
            <input type="password" class="form-control" placeholder="Confirm Password" required="">
            <select class="form-control">
                <option>Student</option>
                <option>Teacher</option>
            </select>
            <button class="btn btn-lg btn-primary btn-block" type="submit" role="button">Register</button>
          </form>
        </div>


      

    </div><!-- /.container -->


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>