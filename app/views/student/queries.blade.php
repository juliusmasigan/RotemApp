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
					{{ Form::select('topic', $topics, null, array('class' => 'form-control', 'placeholder' => 'Choose Topic')); }}
					{{ Form::submit('Ask', array('class' => 'btn btn-primary')); }}
				{{ Form::close(); }}
			</div>
            <div class="msgContainer">

                <div class="msgIndContainer">
                    <div class="msg-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="msg-user">
                        <span id="user-name" class="user-name">Walter</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="msg-msg">
                        <p class="msg-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="msg-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

                <div class="msgIndContainer">
                    <div class="msg-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="msg-user">
                        <span id="user-name" class="user-name">Jesse</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="msg-msg">
                        <p class="msg-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="msg-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

                <div class="msgIndContainer">
                    <div class="msg-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="msg-user">
                        <span id="user-name" class="user-name">Saul</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="msg-msg">
                        <p class="msg-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="msg-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

            </div>
        </div>
      

    </div><!-- /.container -->
    @include('createMessage')


@stop
