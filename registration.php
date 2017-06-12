<?php 
  error_reporting(E_ALL & ~E_NOTICE); 
  include "connection.php";
?>
<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">Angular Routing Example</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="material-icons" style="font-size:50px;color:blue;">home</i></a></li>
        <li><a href="#registration"><i class="material-icons" style="font-size:50px;color:blue;">account_box</i> </a></li>
      </ul>
    </div>
  </nav>
<div class="container" id="container">

    <form class="form-horizontal" role="form" method="POST" ng-submit='regi()' enctype="multipart/form-data">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="fulltName" class="col-sm-3 control-label">User Name</label>
            <div class="col-sm-9">
                <input type="text" id="userName" ng-model="userName" placeholder="User Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="text" id="email" ng-model="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" ng-model="password" placeholder="Password" class="form-control">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
        
    </form> <!-- /form -->
</div> <!-- ./container -->
 