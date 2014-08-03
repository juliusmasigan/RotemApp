@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">

        @include('navbar')

        <div class="section">
            <div class="sectionHeader">
                <h4>Add Class</h4>
            </div>
            <div class="addExam">
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Enter Class Name" required="" autofocus="">
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


@stop
