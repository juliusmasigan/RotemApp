@extends('layout')

@section('body-section')

	<div class="confirmation-container">
	{{ Form::open(array('url' => "teacher/confirm", 'method' => 'POST', 'class' => 'section form-register')) }}
		<h2>Verify Account</h2>
		<p>Please enter the verification code sent in your phone.</p><br/>
		{{ Form::text('verification_code', null, array('required', 'class' => 'form-control', 'placeholder' => 'Verification Code')) }}
		{{ Form::hidden('user', $user) }}
		{{ Form::hidden('key', $key) }}
		{{ Form::submit('Submit', array('class' => 'btn btn-block btn-primary btn-lg')) }}
	{{ Form::close() }}
	</div>

@stop
