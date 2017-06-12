<?php 
	error_reporting(E_ALL & ~E_NOTICE); 
	include "connection.php";

/*// inser query
	$result = 'insert into login (userName,password,email) values ("'.$userName.'","'.$password.'","'.$email.'")';

	if($conn->query($result) === TRUE){
            echo "Succ";
        }else{
            echo "Err";
        }
*/
/*//login query
	$sql = "SELECT * FROM login WHERE userName='".$userName."' && password ='".$password."'";
	//$result = mysqli_query($conn, $sel);

	$result = $conn->query($sql);

if ($result->num_rows > 0) {echo "hi";}*/

?>

<nav class="navbar navbar-default">
    <div class="container">
		<div class="navbar-header">
		<a class="navbar-brand" href="/">Welcome Mahesh</a>
		</div>

		<ul class="nav navbar-nav navbar-right">
		<li><a ng-href="#addStudent"><button type="button" name="submit" class="btn btn-primary btn-block "style="font-size: 16px;color:white; background-color:blue; padding: 6px">Add Student</button></a></li>
		<li><a ng-href="#monitor"><button type="button" name="submit" class="btn btn-primary btn-block " style="font-size: 16px;color:white; background-color:blue; padding: 6px">Monitor</button> </a></li>
		<li><a ng-href="#"><button type="button" name="submit" class="btn btn-primary btn-block " style="font-size: 16px;color:white; background-color:blue; padding: 6px">Log Out</button></a></li>
		

		</ul>
    </div>
</nav>
