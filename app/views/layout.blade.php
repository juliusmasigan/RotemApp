<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Skill Quest - Welcome!</title>
    <!--base href="http://skillquest.eu1.frbit.net"-->
    <!-- Bootstrap core CSS -->
	<?php echo HTML::style('css/bootstrap.css'); ?>

    <!-- Custom styles for this template -->
    <?php echo HTML::style('css/style.css'); ?>

  </head>

  <body>
    @include('header')
 
 <div id='content'>
  @yield('body-section')
 </div>
 @include('footer')
  </body>

</html>