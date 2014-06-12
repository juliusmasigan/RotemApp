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
    <base href="http://localhost">    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
  </head>

  <body>
    <?php $page = "profile"; ?>
    <?php include('header-li.php');?>
    <div class="clear"></div>
    <div class="container wrap">

        <?php include('navbar.php');?>
        
        <div class="row">
            <div class="col-sm-3">
                <div class="section">
                    <div class="row">
                        <div class="col-sm-12 col-xs-4">
                        <div class="profile-defaultimage">
                        <img src="images/dpsample.png">
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-xs-8">
                        <div class="profile-username">
                            <h4>Brian Allen</h4>
                        </div>
                        <div class="profile-userloc">
                            <p>Kansas, Missouri</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="section">
                    <!--div class="sectionHeader">
                    </div-->
                    <ul class="nav nav-tabs" id="profile-tab">
                      <li class="active"><a href="#courses">COURSES</a></li>
                      <li><a href="#results">RESULTS</a></li>
                      <li><a href="#stats">STATS</a></li>

                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="courses">
                        Courses
                      </div>
                      <div class="tab-pane fade" id="results">
                        <table class="table" id="profile-resultsTable">
                            <thead>
                                <th>Exam</th>
                                <th>Date</th>
                                <th>No. of Items</th>
                                <th>Score(%)</th>
                                <th>Remarks</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>First Long Exam</td>
                                    <td>Jul 13, 2014</td>
                                    <td>100</td>
                                    <td>83</td>
                                    <td class="green">PASSED</td>
                                </tr>
                                <tr>
                                    <td>Second Long Exam</td>
                                    <td>Sep 13, 2014</td>
                                    <td>80</td>
                                    <td>62</td>
                                    <td class="green">PASSED</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <div class="tab-pane fade" id="stats">Stats</div>
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