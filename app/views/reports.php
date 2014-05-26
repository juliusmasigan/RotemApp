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


        <div class="row">
            <div class="col-md-10">
                <div class="sectionselect">
                <label for="sectionselectlist" class="col-sm-2 control-label">Section:</label>
                <div class="col-sm-4">
                    <select id="sectionselectlist" name="Select Class" onchange="location = this.options[this.selectedIndex].value;">
                    <option value="#" selected="">Section 1</option>
                    <option value="#">Section 2</option>
                    <option value="#">Section 3</option> 
                    <option value="#">Section 4</option> 
                    <option value="#">Section 5</option>
                    <option value="#">Section 6</option>
                </select>
                </div>
                <label for="examselectlist" class="col-sm-2 control-label">Exam Name:</label>
                <div class="col-sm-4">
                    <select id="examselectlist" name="Select Exam" onchange="location = this.options[this.selectedIndex].value;">
                    <option value="#" selected="">1st Long Exam</option>
                    <option value="#">2nd Long Exam</option>
                    <option value="#">3rd Long Exam</option> 
                    <option value="#">Pop Quiz</option> 
                    <option value="#">Final Exam</option>
                </select>
                </div>
            </div>
            </div>
            <div class="createRecord col-md-2">
                <button class="btn btn-sm btn-primary">
                    Create New Record <span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>


        <div class="section recordsTablewrap">
            <table id="recordsTable" class="table table-hover tablesorter tablesorter-default">
                <thead>
                    <th id="numbering" class="sorter-false numbering" width="30">#</th>
                    <th class="tablesorter-header studentNameList">Student's Name</th>
                    <th class="tablesorter-header testScoreList">Score (%)</th>
                    <th class="tablesorter-header remarksList">Remarks</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="sorter-false">1</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Lannister</span>, <span class="firstName">Tyrion</span></a></td>
                        <td class="testScore">80</td>
                        <td class="remarks">Passed</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Gotham</span>, <span class="firstName">David</span></a></td>
                        <td class="testScore">72</td>
                        <td class="remarks">Failed</td>
                    </tr>
                     <tr>
                        <td>3</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Ciriano</span>, <span class="firstName">Christian</span></a></td>
                        <td class="testScore">90</td>
                        <td class="remarks">Passed</td>
                    </tr>
                     <tr>
                        <td>4</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Hassan</span>, <span class="firstName">Abdul</span></a></td>
                        <td class="testScore">68</td>
                        <td class="remarks">Failed</td>
                    </tr>
                     <tr>
                        <td>5</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Wade</span>, <span class="firstName">Dwayne</span></a></td>
                        <td class="testScore">83</td>
                        <td class="remarks">Passed</td>
                    </tr>
                     <tr>
                        <td>6</td>
                        <td class="studentName"><a href="profile.php"><span class="surName">Hawking</span>, <span class="firstName">Stephen</span></a></td>
                        <td class="testScore">65</td>
                        <td class="remarks">Failed</td>
                    </tr>
                </tbody>
            </table>
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
