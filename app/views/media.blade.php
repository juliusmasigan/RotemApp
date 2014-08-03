@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">

        @include('navbar')
        <!--div class="alert alert-success">Message was successfully sent!</div-->
        <div class="section">
            <div class="sectionHeader">
                <h4>Media&nbsp;&nbsp;&nbsp;
                    <small class="right">
                        <button id="media-create" class="btn-link" title="Post Media" data-toggle="modal" data-target="#postMedia"><span class="glyphicon glyphicon-plus"></span></button>
                        <button id="media-edit-btn"  class="btn-link" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                        <button id="media-edit-done"  class="btn-link">Done</button>
                    </small>
                </h4>
                <hr>

            </div>
            <div class="clear"></div>
            <div class="mediaContainer">

                <div class="mediaIndContainer">
                    <div class="media-post-edit right">
                            <button class="media-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="media-user">
                        <span id="user-name" class="user-name">Walter</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="media-media">
                        <p class="media-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="media-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

                <div class="mediaIndContainer">
                    <div class="media-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="media-user">
                        <span id="user-name" class="user-name">Jesse</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="media-media">
                        <p class="media-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="media-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

                <div class="mediaIndContainer">
                    <div class="media-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                    <div class="media-user">
                        <span id="user-name" class="user-name">Saul</span><br>
                        <span class="feed-date">May 25, 2014</span>
                    </div>
                    <div class="media-media">
                        <p class="media-subj">
                            Lorem ipsum dolor.
                        </p>
                        <p class="media-body">
                            Lorem ipsum dolor. Sit amet id ridiculus vitae elit. Eget gravida eu. Eget integer ac et malesuada nulla velit sit vel. Eu amet metus curabitur vivamus parturient. Viverra sit quis hendrerit adipiscing mattis. Proin quam etiam a pellentesque in libero.
                        </p>
                    </div>
                </div>

            </div>
        </div>



      

    </div><!-- /.container -->
    @include('postMedia')


@stop
