<div id="navbar" data-spy="affix" data-offset-top="200">
        <ul class="nav nav-pills">
          <li class="<?php echo ($page == "dashboard" ? "active" : "")?>"><a href="/dashboard">Dashboard</a></li>
          <!--li class="<?php echo ($page == "messages" ? "active" : "")?>"><a href="/messages">Messages</a></li>
          <li class="<?php echo ($page == "reports" ? "active" : "")?>"><a href="/reports">Reports</a></li>
          <li class="<?php echo ($page == "media" ? "active" : "")?>"><a href="/media">Media</a></li>
          <li class="<?php echo ($page == "events" ? "active" : "")?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Post an Event</a></li>
                  <li><a href="#">View All Events</a></li>
                </ul>
          </li-->
			<li class="<?php echo ($page == "queries" ? "active" : "")?>"><a href="/queries">Queries</a></li>
			<?php $user_type_array = Session::get('user.type'); ?>
          	@if($user_type_array[0] != 'student')
          	<li class="<?php echo ($page == "alerts" ? "active" : "")?>"><a href="/alerts">Alerts</a></li>
          	@endif

    		  @if($user_type_array[0] == 'admin')
    		  <li class="<?php echo ($page == "staffs" ? "active" : "")?>"><a href="/teachers">Staffs</a></li>
    		  <li class="<?php echo ($page == "students" ? "active" : "")?>"><a href="/students">Students</a></li>
    		  @endif
        </ul>
</div>
