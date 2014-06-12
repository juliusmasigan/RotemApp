<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/jquery.simple.lightbox.css">
    <title>Skill Quest - Add Exam Record</title>
    <base href="http://localhost">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
  </head>

  <body>
    <?php $page = "reports"; ?>
    
    <?php include('header-li.php');?>
    <div class="clear"></div>
    <div class="container wrap">

        <?php include('navbar.php');?>

        <div class="section">
            <div class="sectionHeader">
                <h4>Add Exam Record</h4>
            </div>
            <div class="addExam">
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Enter Date" required="" autofocus="">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Enter Test Name" required="">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Enter Number of Items" required="">
                        </div>
                    </div>
                </form>
            </div>

        </div>


      

    </div><!-- /.container -->

    <?php include('footer.php');?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>

<script>
$(document).ready(function(){
$(function(){
$.tablesorter.addWidget({
    id: "numbering",
    format: function(table) {
        var c = table.config;
        $("tr:visible", table.tBodies[0]).each(function(i) {
            $(this).find('td').eq(0).text(i + 1);
        });
    }
});

$("#recordsTable").tablesorter(
{
    theme : 'blue',
    headers: {
      // disable sorting of the first column (we can use zero or the header class name)
      '.numbering' : {
        // disable it by setting the property sorter to false
        sorter: false
      }
    },
 
    sortList : [[1,0],[2,0],[3,0],[4,0]],
    sortDisabled: [".numbering"],
    // header layout template; {icon} needed for some themes
    headerTemplate : '{content}{icon}',
 
    // initialize column styling of the table
    widgets : ["columns","numbering"],
    widgetOptions : {
      // change the default column class names
      // primary is the first column sorted, secondary is the second, etc
      columns : [ ".studentNameList",".testScoreList", "remarksList" ]
    },
});
});
});
    </script>

</body></html>