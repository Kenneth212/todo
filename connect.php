<?php
//Why is this important? Why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
//If mysqli->connect_error then we want it to die and have this message
if($mysqli->connect_error) {
	die('Connect Error(' . $mysqli->connect_error . ')'
	. $mysqli->connect_error);
}
else {
	echo "Connect made";
}
$mysqli->close();

?>