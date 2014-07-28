<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/jquery.simple.lightbox.css">
    <title>Skill Quest - Register</title>
    <base href="http://skillquest.eu1.frbit.net">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
  </head>

  <body>
    <?php $page = "messages"; ?>
    <?php include('header-li.php');?>
    <div class="clear"></div>
    <div class="container wrap">

        <?php include('navbar.php');?>
         <div class="alert alert-success">Message was successfully sent!</div>
        <div class="section">
            <div class="sectionHeader">
                <h4>Messages&nbsp;&nbsp;&nbsp;
                    <small class="">
                    <button class="btn btn-link"> Inbox</button>
                    <button class="btn btn-link"> Sent</button>
                    </small>
                    <small class="right">
                        <button id="msg-create" class="btn-link" data-toggle="modal" data-target="#createMessage"><span class="glyphicon glyphicon-plus"></span></button>
                        <button id="msg-edit-btn"  class="btn-link"><span class="glyphicon glyphicon-pencil"></span></button>
                        <button id="msg-edit-done"  class="btn-link">Done</button>
                    </small>
                </h4>
                <hr>

            </div>
            <div class="clear"></div>
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
    <?php include('createMessage.php');?>
    <?php include('footer.php');?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>


</body></html>