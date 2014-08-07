@extends('layout')

@section('body-section')

<div class="clear"></div>
<div class="container wrap">

	@include('navbar')

	<div class="section">
		<h4><strong>{{ $student->full_name; }}</strong></h4>
		@if($student->registration[0]->status == "approval")
			{{ Form::button('Approve', array('class' => 'btn btn-success', 'onclick' => 'javascript:location.href=\'/student/approve/'.$student->id.'\'')); }}
		@endif
	</div>

</div>

@stop