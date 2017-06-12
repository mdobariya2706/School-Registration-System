<?php
// The request is a JSON request.
// We must read the input.
// $_POST or $_GET will not work!
include "connection.php";

$data = file_get_contents("php://input");

$objData = json_decode($data);

// perform query or whatever you wish, sample:


$query = 'SELECT * FROM
subjects
WHERE
sbName="'. $objData->data .'"';


// Static array for this demo
$values = array('php', 'web', 'angularjs', 'js');

// Check if the keywords are in our array
if(in_array($objData->data, $values)) {
	echo 'I have found what you\'re looking for!';
}
else {
	echo 'Sorry, no match!';
}