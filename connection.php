<?php
$conn = mysqli_connect('localhost', 'root', '', 'school');
		if($conn -> connect_error){
			echo '<pre>';
			print_r($conn -> connect_error);
			
		}else{
			//echo "Database Connected";
		}

/*
<?php
$link = @mysql_connect('localhost','root','') or die('Unable to establish a DB     connection');

mysql_set_charset('utf8');
mysql_select_db('school',$link);
*/
/*
$sql = "SELECT * FROM login WHERE userName='".$userName."' && password ='".$password."'";
  //$result = mysqli_query($conn, $sel);

  $result = $conn->query($sql);

if ($result->num_rows > 0) {echo "hi";}
*/
?>