@extends('layout')

@section('body-section')
  
    <div class="clear"></div>
    <div class="container wrap">


        <div class="wrap-login">
            {{Form::open(array('url' => "teacher/login", 'method' => "post", 'class' => "section form-login")) }}
            <h2 class="form-login-heading">Log in</h2>
            <br>
            {{ Form::text('username', Input::old('email')?Input::old('email'):null, array('class' => "form-control", 'placeholder' => "Username")) }}
            <br>
            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password")) }}
            
            {{ Form::checkbox('rememberme', "rememberme", false, array( 'id' => "rememberme")) }}
            {{Form::label('rememberme', 'Remember me' ,array('for' => "rememberme"))}}

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          {{Form::close() }}
        </div>


    </div><!-- /.container -->

@stop