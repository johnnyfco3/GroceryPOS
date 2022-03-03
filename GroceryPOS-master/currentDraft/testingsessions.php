
<?php
$server = "localhost";
$dbusername = "root";
$password = "";
$db = "marketpos-2";
$debug = "false";

$conn = mysqli_connect($server, $dbusername, $password, $db);
session_start();

if($conn->connect_error){
	die('Could not connect: ' . $conn-> connect_error);
}elseif($debug == "true"){
	echo nl2br("\nDEBUG:\n");
	echo nl2br("3 \n 2 \n 1...");
	echo nl2br("\n Connected successfully\n");
}

class currentCust{
	private $ID;
	private $fname;
	private $lname;
	public function _construct()
	{
		$this->$ID = 0;
		$this->$fname = 'First';
		$this->$lname = 'Last';
	}
	function getFirst()
	{
		return $fname;
	}
	function getLast()
	{
		return $lname;
	}
	function getID()
	{
		return $ID;
	}
	function setID($custID)
	{
		$ID = $custID;
	}
	function setFirst($custFirst)
	{
		$fname = $custFirst;
	}
	function setLast($custLast)
	{
		$lname = $custLast;
	}
}
?>
