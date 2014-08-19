@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">

        @include('navbar')
        <div class="section">
            <div class="sectionHeader">
                <h4>Alerts&nbsp;&nbsp;&nbsp;
                </h4>
                <hr>
            </div>
            <div class="clear"></div>
            <div>
				{{ Form::open(array('url' => '/alerts', 'method' => 'POST', 'class' => 'form-horizontal')); }}
				<div class="form-group">
					<label class="control-label col-sm-2">Choose Recipient</label>
					<div class="col-sm-8">
						{{ Form::select('recipient', array('all' => 'Select All', 'teachers' => 'Select Teachers', 
						'students' => 'Select Students'), null, 
						array('class' => 'multiselect form-control', 'multiple' => 'multiple')); }}
					</div>
				</div>
				<div class="form-group">
                    <label class="control-label col-sm-2">Message</label>
                    <div class="col-sm-8">
						{{ Form::textarea('message', null, array('class' => 'form-control')); }}
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-2">Mode</label>
                    <div class="col-sm-8">
						<label class="radio-inline">
							{{ Form::radio('mode', 'email'); }} By Email
						</label>
						<label class="radio-inline">
                            {{ Form::radio('mode', 'sms'); }} By SMS
                        </label>
                    </div>
                </div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						{{ Form::submit('Send It', array('class' => 'btn btn-default')); }}
					</div>
				</div>
				{{ Form::close(); }}
            </div>
        </div>
      

    </div><!-- /.container -->
    @include('createMessage')

<script>
	$('.multiselect').multiselect({buttonWidth:'300px'});
</script>

@stop
