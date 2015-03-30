@extends('layout')

@section('body-section')
<div id="content">

{{ Form::open(array('url' => "/register", 'method' => "POST", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('phone', null, array('class' => "form-control", 'placeholder' => "Phone", 'required')) }}
            {{ Form::text('email', null, array('class' => "form-control", 'placeholder' => "Email", 'required')) }}
            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password", 'required')) }}
            <br>
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}
{{ Form::close() }}
</div>
@stop
