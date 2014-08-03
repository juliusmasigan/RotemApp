@extends('layout')

@section('body-section')
    <div class="clear"></div>
    <div class="container wrap">


        <div class="wrap-register">
          <form class="section form-register" role="form" method="post" action="register">
            <h2 class="form-register-heading">Register</h2>
            <input type="text" class="form-control" placeholder="Student's Name" required="" autofocus="">
            <input type="text" class="form-control" placeholder="Parent's Name" required="">
            <input type="text" class="form-control" placeholder="Mobile Number" required="" autofocus="">
            <input type="email" class="form-control" placeholder="Email Address" required="">
            <input type="text" class="form-control" placeholder="Username" required="">
            <input type="password" class="form-control" placeholder="Password" required="">
            <input type="password" class="form-control" placeholder="Confirm Password" required="">
            <select class="form-control">
                <option>Student</option>
                <option>Teacher</option>
            </select>
            <button class="btn btn-lg btn-primary btn-block" type="submit" role="button">Register</button>
          </form>
        </div>


      

    </div><!-- /.container -->
@stop
