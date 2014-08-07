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
					@if($teacher->registration[0]->status == "pending")
					<?php $row_class = "warning"; ?>
					@elseif($teacher->registration[0]->status == "approval")
					<?php $row_class = "info"; ?>
					@endif
					<tr class="<?php echo $row_class; ?>">
						<td>{{ $teacher->id; }}</td>
						<td>{{ HTML::link("teacher/{$teacher->id}", $teacher->full_name); }}</td>
						<td>{{ $teacher->email; }}</td>
						<td>{{ $teacher->registration[0]->status; }}</td>
					</tr>
				@endforeach
			<tbody>
		</table>
	</div>

</div>

@stop
