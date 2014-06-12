@extends('layout')

@section('body-section')


{{ Form::open(array('url' => "/register",'method' => "post", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('firstName', null, array('class' => "form-control", 'placeholder' => "First Name")) }}

            {{ Form::text('lastName', null, array('class' => "form-control", 'placeholder' => "Last Name")) }}

            {{ Form::text('parentsName', null, array('class' => "form-control", 'placeholder' => "Parent's Name")) }}

            {{ Form::text('mNumber', null, array('class' => "form-control", 'placeholder' => "Mobile Number")) }}

            {{ Form::email('email', null, array('class' => "form-control", 'placeholder' => "Email")) }}

            {{ Form::text('username', null, array('class' => "form-control", 'placeholder' => "Username")) }}

            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password")) }}

            {{ Form::password('confpassword', array('class' => "form-control", 'placeholder' => "Confirm Password")) }}

            {{ Form::select('userType', array('key' => "Student", 'value' => "Teacher"), 'key', array('class' => "form-control")) }}

            <br>
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}

{{ Form::close() }}


@stop