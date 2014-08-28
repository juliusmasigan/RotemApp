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
			<div>
				{{ Form::open(array('url' => '/queries', 'method' => 'POST', 'class' => 'section form-inline')); }}
					<strong>Ask a question</strong><br /><br />
					{{ Form::textarea('query', null, array(
						'class' => 'form-control', 
						'placeholder' => 'Your question here',
						'rows' => 1,
					)); }}
					<?php
					//Add a null option.
					$topics = array("-1" => "Choose Topic:") + $topics;
					?>
					{{ Form::select('topic', $topics, -1, array('class' => 'form-control selectpicker show-menu-arrow', 'placeholder' => 'Choose Topic')); }}
					{{ Form::submit('Ask', array('class' => 'btn btn-primary')); }}
				{{ Form::close(); }}
			</div>
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
                </div>
				@endforeach

            </div>
        </div>
      

    </div><!-- /.container -->
    @include('createMessage')

<script>
	$('select.selectpicker').selectpicker({
		width:'200px'
	});
</script>

@stop
