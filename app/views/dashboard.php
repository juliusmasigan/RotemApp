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
    <?php $page = "dashboard"; ?>
    <?php include('header-li.php');?>
    <div class="clear"></div>
    <div class="container wrap">

        <?php include('navbar.php');?>

        <div class="alert alert-success">Welcome to SkillQuest!</div>

        <div class="section dash-report">
            <div class="sectionHeader">
              <h4>Reports Summary</h4>
            </div>
            <div class="row">
                <div id="dash-ttlstdnt" class="dash-summary col-xs-6 col-md-3">
                    <p>Total Students<br>
                    <span>68</span></p>
                </div>
                <div id="dash-attnd" class="dash-summary col-xs-6 col-md-3">
                    <p>Attendance<br>
                    <span>87.6%</span></p>
                </div>
                <div id="dash-averslt" class="dash-summary col-xs-6 col-md-3">
                    <p>Average Result<br>
                    <span>78%</span></p>
                </div>
                <div id="dash-ttltchr" class="dash-summary col-xs-6 col-md-3">
                    <p>Total Teachers<br>
                    <span>12</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn-link" type="button" onClick="location.href='reports.php'">View Reports &raquo;</button></div>
            </div>
        </div>

        <div class="row">
        <!--NEWS FEED-->
            <div id="dash-nf" class="col-md-7">
                <div class="section">
                    <h4>News Feed 
                    <small class="right">
                        <button id="feed-edit-btn"  class="btn-link"><span class="glyphicon glyphicon-pencil"></span></button>
                        <button id="feed-edit-done"  class="btn-link">Done</button>

                    </small>
                    </h4>
                    <hr>
                    <div id="dash-cont-nf">
                        <div class="dash-feed-post">
                           <div class="feed-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                           </div>
                           <div class="feed-user">
                            <img src="images/user-thumbnail-sm.png" class="pull-left">&nbsp;&nbsp;<span id="user-name" class="user-name"><a href="#">Juan dela Cruz</a></span><br>
                            <span class="feed-date">May 25, 2014</span>
                           </div>
                           <div class="feed-user-post">
                            <p class="feed-user-post-subject">Joined the network.</p>
                           </div>
                        </div>

                        <div class="dash-feed-post">
                           <div class="feed-post-edit right">
                            <button class="feed-remove-btn btn-link"><span class="glyphicon glyphicon-remove"></span></button>
                           </div>
                           <div class="feed-user">
                            <img src="images/user-thumbnail-sm.png" class="pull-left">&nbsp;&nbsp;<span id="user-name" class="user-name"><a href="#">George Adams</a></span><br>
                            <span class="feed-date">May 25, 2014</span>
                           </div>
                           <div class="feed-user-post">
                            <p class="feed-user-post-subject">Lorem ipsum dolor. Sit amet metus sit et nec. Sed cursus mi malesuada vel velit sociis gravida orci. Nunc eget praesent. Eget mauris lacus nec nonummy eu. Sollicitudin duis justo at mi lectus. Orci euismod aenean. Repudiandae lectus lacus. Felis nullam arcu. Perferendis pede eget. Duis consectetuer ut consectetuer mi tortor. Pellentesque donec nulla eu sapien ultricies. Suspendisse neque hendrerit parturient diam nam ut congue enim morbi quis mollis. Amet sed duis laborum dolor at. Voluptatem venenatis vitae mauris turpis dictumst rutrum rhoncus interdum non nec erat. Nibh porta sed dictumst elementum nisl. Turpis hac vel eget tincidunt ipsum eros.</p>
                            <div class="feed-user-post-image">
                                <a target="_blank" href="images/feed-image-sample.png" data-lightbox ><img src="images/feed-image-sample.png" alt="Photo Caption" /></a>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--EVENTS-->
            <div id="dash-ev" class=" col-md-5">
                <div class="section">
                    <h4>Events <small class="right"><button class="btn-link">View All Events &raquo;</button></small></h4>
                    <hr>
                    <div id="dash-cont-ev">
                            <table class="table dash-ev-post">
                            <tbody>
                                <tr class="feed-ev-post">
                                    <td class="feed-ev-title"><a href="#">
                                        &bull; Teacher's Meet</a></td>
                                    <td class="feed-ev-time">10:00AM</td>
                                    <td class="feed-ev-date">Mar 27, 2014</td>
                                </tr>
                                <tr class="feed-ev-post">
                                    <td class="feed-ev-title"><a href="#">
                                        &bull; Result Day</a></td>
                                    <td class="feed-ev-time">09:00AM</td>
                                    <td class="feed-ev-date">Apr 1, 2014</td>
                                </tr>
                                <tr class="feed-ev-post">
                                    <td class="feed-ev-title"><a href="#">
                                        &bull; Summer Holidays</a></td>
                                    <td class="feed-ev-time">12:00PM</td>
                                    <td class="feed-ev-date">Apr 15-17, 2014</td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>

        </div>



      

    </div><!-- /.container -->

    <?php include('footer.php');?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <!--script src="js/jquery.bootstrap.simple.lightbox.js"></script>
    <script type="text/javascript">
    $('[data-lightbox]').simpleLightbox();
    </script-->

</body></html>