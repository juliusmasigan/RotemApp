@extends('layout')


@section('body-section')

<div class="clear"></div>
<div class="container wrap">

	@include('navbar')

	<div class="section recordsTablewrap">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
			</thead>
			<tbody>
				@foreach($students as $student)
					<?php $row_class = ""; ?>
					@if($student->registration[0]->status == "pending")
					<?php $row_class = "warning"; ?>
					@elseif($student->registration[0]->status == "approval")
					<?php $row_class = "info"; ?>
					@endif
					<tr class="<?php echo $row_class; ?>">
						<td>{{ $student->id; }}</td>
						<td>{{ HTML::link("student/{$student->id}", $student->full_name); }}</td>
						<td>{{ $student->email; }}</td>
						<td>{{ $student->registration[0]->status; }}</td>
					</tr>
				@endforeach
			<tbody>
		</table>
	</div>

</div>

@stop
