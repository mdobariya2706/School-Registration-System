<!DOCTYPE html>

<!-- define angular app -->
<html ng-app="myApp">

<head>
  <!-- SCROLLS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>	
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>  
</head>

<!-- define angular controller -->
<body>
  

  <div id="main">
	<!-- this is where content will be injected -->
    <div ng-view></div>
  </div>
  
  <script src="app.js"></script>
</body>
</html>
