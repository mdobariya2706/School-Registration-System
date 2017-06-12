
<?php 
	//error_reporting(E_ALL & ~E_NOTICE); 
	include(dirname(__FILE__)."/../connection.php");
	header("Content-Type: application/json");
	
	   	// check username or password from database
	    $postdata = file_get_contents("php://input");
	    $request = json_decode($postdata);
	    $userName = $request->userName;
	    $password = $request->password;
	    $sql = "SELECT * FROM login WHERE userName='".$userName."' && password ='".$password."'";
  //$result = mysqli_query($conn, $sel);

  		$result = $conn->query($sql);
  		//print_r($password);

		if ($result->num_rows > 0) {
        	echo $userName;        
	    }
	    else{
	        echo "error";        
	    }
	 


?>