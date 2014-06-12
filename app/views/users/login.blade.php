@extends('layout')
{{-- 1. Extend the basic layout --}}

@section('title-section')
  The title for this page is: <em>akshdfgkshdj</em>
@stop
{{-- 2. Define the title section contents --}}

@section('body-section')
  
    <div class="clear"></div>
    <div class="container wrap">


        <div class="wrap-login">    
            {{Form::open(array('url' => "/login", 'method' => "post", 'class' => "section form-login")) }}
            <h2 class="form-login-heading">Log in</h2>
            <br>
            {{ Form::text('username', null, array('class' => "form-control", 'placeholder' => "Username")) }}
            <br>
            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password")) }}
            
            {{ Form::checkbox('rememberme', "rememberme", false, array( 'id' => "rememberme")) }}
            {{Form::label('rememberme', 'Remember me' ,array('for' => "rememberme"))}}

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          {{Form::close() }}
        </div>


      

    </div><!-- /.container -->

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
@stop
{{-- 3. Define the body section --}}