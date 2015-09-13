<?php
include('../model/profile.php');
class LoginCheck
{
	public $profile;
	private $username;
	private $password;
	private $conn;

public function __construct($servername,$dbName,$uname,$pwd,$username,$password){
	$this->username = $username;
	$this->password = $password;
	$this->profile = new Profile();
	
	// Create connection
	$this->conn = new mysqli($servername,$uname,$pwd,$dbName);
	
	// Check connection
	if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
	}
	echo "Connected successfully";
	
	}

public function doCheck(){
	$query = "SELECT * FROM `profile` WHERE `username` = '$this->username' AND `password` = '$this->password'";
	$result = $this->conn->query($query);

	// associative array
	$row = $result->fetch_array(MYSQLI_ASSOC);
	//printf("\n %s %s %s\n", $row["username"], $row["type"],$row["fName"]);
	if($row != null){
		$this->profile->setUsername($row["username"]);
		$this->profile->setPassword($row["password"]);
		$this->profile->setType($row["type"]);
		$this->profile->setFirstName($row["fName"]);
		$this->profile->setLastName($row["lName"]);
		$this->profile->setSex($row["sex"]);
		$this->profile->setBirthDate($row["birthdate"]);
		$this->profile->setMAddress($row["maddress"]);
		$this->profile->setCity($row["city"]);
		$this->profile->setState($row["state"]);
		$this->profile->setZipCode($row["zipcode"]);
		$this->profile->setTelephone($row["telephone"]);
		$this->profile->setEmail($row["email"]);
		$this->profile->setApplication($row["application"]);
		return true;
	} else {
		return false;
	}

	/* free result set */
	$result->free();

	/* close connection */
	$this->conn->close();

	

}	


}






?>