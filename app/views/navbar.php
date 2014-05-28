<div id="navbar" data-spy="affix" data-offset-top="200">
        <ul class="nav nav-pills">
          <li class="<?php echo ($page == "dashboard" ? "active" : "")?>"><a href="dashboard.php">Dashboard</a></li>
          <li class="<?php echo ($page == "messages" ? "active" : "")?>"><a href="messages.php">Messages</a></li>
          <li class="<?php echo ($page == "reports" ? "active" : "")?>"><a href="reports.php">Reports</a></li>
          <li class="<?php echo ($page == "media" ? "active" : "")?>"><a href="#">Media</a></li>
          <li class="<?php echo ($page == "events" ? "active" : "")?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Post an Event</a></li>
                  <li><a href="#">View All Events</a></li>
                </ul></li>
          <li class="<?php echo ($page == "alerts" ? "active" : "")?>"><a href="#">Alerts</a></li>
        </ul>
</div>
