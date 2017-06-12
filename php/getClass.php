<?php  
 //load_country.php  
include(dirname(__FILE__)."/../connection.php");

	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$class = array();  
		$query = "SELECT * FROM class ";  
		$result = mysqli_query($conn, $query);  
		while($row = mysqli_fetch_array($result))  
		{  
			$class[] = $row;  
		}  
		echo json_encode($class);  
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		$postdata = file_get_contents("php://input");
	    $request = json_decode($postdata);
	    $selClass = $request->selClass;
	    //$subData = $request ->subData;

	    
		    //echo "<script>console.log( 'Debug Objects: " . $selClass . "' );</script>";

			$query = "SELECT subjects.sbName,subjects.sbId FROM subjects INNER JOIN class ON subjects.cId = class.cId
						WHERE class.cName = 'Class_1'";  
			$result = $conn->query($query);
			$sub = array();
			// if you want place error checking code here (see my function do_query)
			while($row = $result->fetch_array()) {
			  $sub[] = $row;  
			}  
			
			echo json_encode($sub);  
		


	}
 ?>  
 
