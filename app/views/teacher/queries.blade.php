@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">

        @include('navbar')
        <div class="section">
            <div class="sectionHeader">
                <h4>Queries&nbsp;&nbsp;&nbsp;</h4>
                <hr>

            </div>
            <div class="clear"></div>
            <div class="msgContainer">

				@foreach($queries as $query)
                <div class="msgIndContainer">
					<div class="query-header">
						<div class="query-title"><strong>Q: {{ $query->title; }}</strong></div>
						<!--span class="query-creator">Posted by: {{ $query->student_full_name; }}</span-->
					</div>
					@foreach($query->answer as $answer)
					<div class="query-answer">
						A: {{ $answer->detail; }}
					</div>
					@endforeach
					<div class="new-answer">
						<button class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#addAnswerModal">Add Answer</button>
					</div>
                </div>
				@endforeach

            </div>
        </div>
      

    </div><!-- /.container -->

	<!-- Answer Modal -->
	<div class="modal fade" id="addAnswerModal" tabindex="-1" role="dialog" aria-labelledby="answerModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="answerModalLabel">Add Answer</h4>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	<!-- Answer Modal -->

<script>
	$('select.selectpicker').selectpicker({
		width:'200px'
	});
</script>

@stop
