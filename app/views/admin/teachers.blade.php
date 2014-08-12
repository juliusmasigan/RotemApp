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
				@foreach($teachers as $teacher)
					<?php $row_class = ""; ?>
					@if($teacher->status == "pending")
					<?php $row_class = "warning"; ?>
					@endif
					<tr class="<?php echo $row_class; ?>">
						<td>{{ $teacher->id; }}</td>
						<td>{{ HTML::link("teacher/{$teacher->id}", $teacher->full_name); }}</td>
						<td>{{ $teacher->email; }}</td>
						<td class="status-col" width="200">
							<span>{{ $teacher->status; }}</span>
							<span class="status-actions">
								{{ HTML::link("teacher/approve/{$teacher->id}", "Approve"); }} | {{ HTML::link("teacher/decline/{$teacher->id}", "Decline"); }}
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
		$(this).find('span:first').toggle();
		$(this).find('span.status-actions').toggle();
	});
</script>

@stop
