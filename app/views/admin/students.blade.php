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
					@if($student->status == "pending")
					<?php $row_class = "warning"; ?>
					@endif
					<tr class="<?php echo $row_class; ?>">
						<td>{{ $student->id; }}</td>
						<td>{{ HTML::link("student/{$student->id}", $student->full_name); }}</td>
						<td>{{ $student->email; }}</td>
						<td class="status-col" width="200">
							<span>{{ $student->status; }}</span>
							<span class="status-actions">
								{{ HTML::link("student/approve/{$student->id}", "Approve"); }} | 
								{{ HTML::link("student/decline/{$student->id}", "Decline"); }}
							</span>
						</td>
					</tr>
				@endforeach
			<tbody>
		</table>
	</div>

</div>

<script>
	$('.recordsTablewrap td.status-col').click(function(event) {
		if($(this).find('span:first').text() == "pending") {
			$(this).find('span:first').toggle();
			$(this).find('span.status-actions').toggle();
		}
	});
</script>

@stop
