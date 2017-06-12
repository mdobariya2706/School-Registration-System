// create the module and name it scotchApp
var myApp = angular.module('myApp', ['ngRoute']);

// configure our routes
myApp.config(function($routeProvider) {
	$routeProvider			
		// route for the about page
		.when('/', {
			templateUrl : 'login.php',
			controller  : 'loginCntr'
		})
		// route for the home page
		.when('/registration', {
			templateUrl : 'registration.php',
			controller  : 'regiCntr'
		})
		//php Codding
		.when('/addStudent', {
			templateUrl : 'addStudent.php',
			controller  : 'addStudentCntr'
		})
		.when('/monitor', {
			templateUrl : 'monitor.php',
			controller  : 'addStudentCntr'
		})
		//home Codding
		.when('/home', {
			templateUrl : 'home.php',
			controller  : 'homeCntr'
		})
	
});

myApp.controller('loginCntr',function($rootScope,$scope,$http,$location){
	
	$scope.login = function(){
    	
	    var req = {
	        method: 'POST',
	        url: 'php/loginSession.php',
	        data: { userName: $scope.userName,
	                password:$scope.password 
	        	}           	
	    };
	console.log($scope.password);		
	    // Successful HTTP post request or not 

	    $http(req).success(function(suc){
	    	console.log(suc);
	    	$scope.sucData = suc;
	    	
	    	//$scope.result = angular.equals($scope.sucData, $scope.msg1);
	    	if($scope.sucData == $scope.userName){
		    	$location.path("/home");
	    	}
		    else{
		    	$location.path("/");
		    }
	    	//$location.path('/home');
	    });   
	      
   };
});
    
myApp.controller('regiCntr', function($rootScope,$scope,$http,$location) {
	

	$scope.regi= function(){
        var result = {
                method: "POST",
                url: "php/regi.php",
                data: {
                    userName:$scope.userName,
                    password:$scope.password,
                    email:$scope.email
                }
            }
            $http(result).then(function(suc){
                    $location.path('/');
                },function(err){
                    $location.path('/registration');
                });
        };
   
});

// create the controller and inject Angular's $scope
myApp.controller('addStudentCntr', function($scope,$http,$location) {
	//Class Drop Down

	/* $http.get("php/getClass.php")  
	.success(function(data){
	// console.log(data); 
	    $scope.class = data;  
	}) */ 
	//add Student    
	$scope.addStudent= function(){
		//console.log($scope.stu.name);
        var result = {
                method: "POST",
                url: "php/addStudent1.php",
                data:{
                	stuData :   $scope.stu,
	                }
            }
		//console.log(result.stuData.name);
            $http(result).then(function(suc){
                    //$location.path('/');
                    console.log(suc.data);
                   
                    $scope.stu ="";
                });
        };
   

	var classData = {
	    method: "GET",
	    url: "php/getClass.php",
	    status: "cl" 
	}
	$http(classData).then(function(data){
	        //console.log(data);	        
	        $scope.class = data.data;  
	    });

	//get subjects
    $scope.loadSubjects= function(){
	//console.log($scope.stu.class);
    var result = {
            method: "POST",
            url: "php/getClass.php",
            data: {
            	selClass : $scope.stu.class
            }
        }
        $http(result).then(function(data){
        	//console.log(data.data[0].sbName);
                $scope.subjects = data.data
            });
    };
      
    
});

// create the controller and inject Angular's $scope
myApp.controller('homeCntr', function($scope) {
	// create a message to display in our view
	$scope.message = 'registration!';
});

	