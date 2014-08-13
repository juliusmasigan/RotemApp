@extends('layout')

@section('body-section')
<div id="content">

@if(!Session::has('pre_registration'))
{{ Form::open(array('url' => "/register", 'method' => "POST", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('institution', null, array('class' => "form-control", 'placeholder' => "Institution", 'required')) }}
            <div class="input-group">
                  {{ Form::text('domain', null, array('class' => "form-control", 'placeholder' => "Sub Domain")) }}
                  <span class="input-group-addon">.skillquest.com</span>
            </div>
            {{ Form::text('phone', null, array('class' => "form-control", 'placeholder' => "Phone", 'required')) }}
            {{ Form::text('numberStudents', null, array('class' => "form-control", 'placeholder' => "Number of Students")) }}
            <br>
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}
{{ Form::close() }}
@else
{{ Form::open(array('url' => "/post_register", 'method' => "POST", 'class' => "section form-register")) }}
            <h2 class="form-register-heading">Register</h2>
            {{ Form::text('fullName', null, array('class' => "form-control", 'placeholder' => "Full Name", 'required')) }}
            {{ Form::text('email', null, array('class' => "form-control", 'placeholder' => "Email", 'required')) }}
            {{ Form::password('password', array('class' => "form-control", 'placeholder' => "Password", 'required')) }}
            <br>
		{{ Form::hidden('institution', Input::old('institution')) }}
		{{ Form::hidden('domain', Input::old('domain')) }}
		{{ Form::hidden('phone', Input::old('phone')) }}
		{{ Form::hidden('numberStudents', Input::old('numberStudents')) }}
            {{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}
{{ Form::close() }}
@endif
</div>

<script>
      $('.form-register input[name=institution]').on('blur', function(event) {
            var institution = this.value;
            $('.form-register input[name=domain]').val(institution);
      });
</script>
@stop
