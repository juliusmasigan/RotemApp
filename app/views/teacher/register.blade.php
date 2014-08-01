@extends('layout')

@section('body-section')

{{ Form::open(array('url' => "teacher/register", 'method' => "POST", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('fullName', null, array('class' => "form-control", 'placeholder' => "Name", 'required')) }}
            {{ Form::text('email', null, array('class' => "form-control", 'placeholder' => "Email", 'required')) }}
            {{ Form::text('phone', null, array('class' => "form-control", 'placeholder' => "Phone", 'required')) }}
            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password", 'required')) }}
			{{ Form::password('confirmPassword', array('class' => "form-control", 'placeholder' => "Confirm password", 'required')) }}
            <br>
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}
{{ Form::close() }}

@stop
