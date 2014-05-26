<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Skill Quest - Welcome!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <?php include('header.php');?>
    <div class="clear"></div>
    <div class="container wrap">


        <div class="wrap-login">
          <form class="section form-login" role="form" action="dashboard.php" method="get">
            <h2 class="form-login-heading">Log in</h2>
            <input type="email" class="form-control" placeholder="Username" required="" autofocus="">
            <input type="password" class="form-control" placeholder="Password" required="">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>


      

    </div><!-- /.container -->

    <?php include('footer.php');?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>
