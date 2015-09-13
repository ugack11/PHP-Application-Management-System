<?php
class Profile
{
	private $username;
	private $password;
	private $type;
	private $fName;
	private $lName;
	private $sex;
	private $birthdate;
	private $maddress;
	private $city;
	private $state;
	private $zipcode = 0;
	private $telephone;
	private $email;
	private $application;

	public function __construct($userName,$userPassword,$userType){
	$this->username = $userName;
	$this->password = $userPassword;
	$this->type = $userType;

	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($userName){
		$this->username = $userName;
		return $this;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($userPassword){
		$this->password = $userPassword;
		return $this;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($userType){
		 $this->type = $userType;
		 return $this;
	}

	public function getFirstName(){
		return $this->fName;
	}

	public function setFirstName($fName){
		$this->fName = $fName;
		return $this;
	}

	public function getLastName(){
		return $this->lName;
	}

	public function setLastName($lName){
		$this->lName = $lName;
		return $this;
	}
	public function getSex(){
		return $this->sex;
	}

	public function setSex($sex){
		$this->sex = $sex;
		return $this;
	}
	public function getBirthDate(){
		return $this->birthdate;
	}

	public function setBirthDate($birthdate){
		$this->birthdate = $birthdate;
		return $this;
	}
	public function getMAddress(){
		return $this->maddress;
	}

	public function setMAddress($maddress){
		$this->maddress = $maddress;
		return $this;
	}
	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
		return $this;
	}
	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
		return $this;
	}
	public function getZipCode(){
		return $this->zipcode;
	}

	public function setZipCode($zipcode){
		$this->zipcode = $zipcode;
		return $this;
	}
	public function getTelephone(){
		return $this->telephone;
	}

	public function setTelephone($telephone){
		$this->telphone = $telephone;
		return $this;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
		return $this;
	}
	public function getApplication(){
		return $this->application;
	}

	public function setApplication($application){
		$this->application = $application;
		return $this;
	}

}


?>
