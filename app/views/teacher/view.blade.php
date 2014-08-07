@extends('layout')

@section('body-section')

<div class="clear"></div>
<div class="container wrap">

	@include('navbar')

	<div class="section">
		<h4><strong>{{ $teacher->full_name; }}</strong></h4>
		@if($teacher->registration[0]->status == "approval")
			{{ Form::button('Approve', array('class' => 'btn btn-success', 'onclick' => 'javascript:location.href=\'/teacher/approve/'.$teacher->id.'\'')); }}
		@endif
	</div>

</div>

@stop