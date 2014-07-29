@extends('layout')

@section('body-section')


{{ Form::open(array('url' => "/register", 'method' => "POST", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('institution', null, array('class' => "form-control", 'placeholder' => "Institution", 'required')) }}

            {{ Form::text('domain', null, array('class' => "form-control", 'placeholder' => "company.skillquest.com")) }}

            {{ Form::text('phone', null, array('class' => "form-control", 'placeholder' => "Phone", 'required')) }}

            {{ Form::text('numberStudents', null, array('class' => "form-control", 'placeholder' => "Number of Students")) }}
            <br>
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}

{{ Form::close() }}


@stop
