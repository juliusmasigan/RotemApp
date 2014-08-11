@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">

        @include('navbar')
        
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
                            <h4>{{ $student->full_name; }}</h4>
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
                    <ul class="nav nav-tabs" id="profile-tab">
                        <li class="active"><a href="#personal-information" data-toggle="tab">INFORMATION</a></li>
                        <li><a href="#courses" data-toggle="tab">COURSES</a></li>
                        <li><a href="#results" data-toggle="tab">RESULTS</a></li>
                        <li><a href="#stats" data-toggle="tab">STATS</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal-information">
                            @if($student->registration[0]->status == "approval")
                                {{ Form::button('Approve', array('class' => 'btn btn-success', 'onclick' => 'javascript:location.href=\'/student/approve/'.$student->id.'\'')); }}
                            @endif
                        </div>
                        <div class="tab-pane" id="courses">
                            Courses
                        </div>
                        <div class="tab-pane" id="results">
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
                        <div class="tab-pane" id="stats">Stats</div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
    @include('createMessage')

@stop