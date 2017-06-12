<?php  
 //load_country.php  
include(dirname(__FILE__)."/../connection.php");

//print_r ($conn);


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		$postdata = file_get_contents("php://input");
	    $request = json_decode($postdata);
	    $stuData1 = $request ->stuData;

	    if(!empty($stuData1)){
		    $sql = "INSERT INTO student (sName,sContact,sEmail)
			VALUES ('".$stuData1->name."','".$stuData1->contact."','".$stuData1->email."');";

		   	if ($conn->query($sql) === TRUE) {
			    echo "New records created successfully1";
			} else {
			    echo "Error1: " . $sql . "<br>" . $conn->error;
			}
			echo "hi";
			exit;
			}
		else{
			echo "Please Enter Records";
		}
/*
	    $sql = "INSERT INTO grades (gGrades,sId,sbId,cId)
		VALUES ('John', 'Doe', 'john@example.com');";
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Mary', 'Moe', 'mary@example.com');";
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Julie', 'Dooley', 'julie@example.com')";

		if ($conn->multi_query($sql) === TRUE) {
		    echo "New records created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

*/
		  /* print_r(, , , $stuData1->class, $stuData1->sub1, $stuData1->sub2, $stuData1->sub3, $stuData1->mark1, $stuData1->mark2, $stuData1->mark3);
		   exit;*/
			//echo "<script type='text/javascript'>console.log('$message');</script>";
/*
			$query = "SELECT subjects.sbName,subjects.sbId FROM subjects INNER JOIN class ON subjects.cId = class.cId
						WHERE class.cName = 'Class_1'";  
			$result = $conn->query($query);
			$sub = array();
			// if you want place error checking code here (see my function do_query)
			while($row = $result->fetch_array()) {
			  $sub[] = $row;  
			}  
			
			echo json_encode($sub);  
		

*/
	}
 ?>  
 
