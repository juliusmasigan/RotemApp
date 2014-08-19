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
	<?php echo HTML::style('css/bootstrap-multiselect.css'); ?>

    <!-- Custom styles for this template -->
    <?php echo HTML::style('css/style.css'); ?>

	<!-- Scripts -->
	<?php echo HTML::script('js/jquery-2.1.0.min.js'); ?>
	<?php echo HTML::script('js/bootstrap.min.js'); ?>
	<?php echo HTML::script('js/bootstrap-multiselect.js'); ?>
	<?php echo HTML::script('js/script.js'); ?>

  </head>

  <body>
	@if(Session::has('uid'))
		@include('header-li')
	@else
    	@include('header')
	@endif
	@include('messages-bar')
	
 	@yield('body-section')
	
	@include('footer')
  </body>

</html>
