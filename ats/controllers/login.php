<?php
include('../dbHelpers/LoginCheck.php');
$username = $_POST["username"];
$password = $_POST["password"];
$account = $_POST["account"];
$logincheck;
$errorMessage;
$loginAttempts = 0;
//$loginAttempts.=$_SESSION['loginAttempts'];
$url;

if($loginAttempts > 2) {		//exceeded logins

    $errorMessage = "<div><p>Error: Number of Login Attempts Exceeded</p></div>";
    session_start();
    $_SESSION['errorMessage'] = $errorMessage;
    header('Location: ../index.php');
} else {
    if($account==="login"){
        $logincheck = new LoginCheck("localhost",
                                     "application",
                                     "root",
                                     "",
                                     $username, $password);

        if($logincheck->doCheck() == true){
        	echo "fetched successfully";
        	session_start();
        	$_SESSION['username'] = $logincheck->profile->getUsername();
        	$_SESSION['password'] = $logincheck->profile->getPassword();
        	$_SESSION['type'] = $logincheck->profile->getType();
        	$_SESSION['fName'] = $logincheck->profile->getFirstName();
        	$_SESSION['lName'] = $logincheck->profile->getLastName();
        	$_SESSION['sex'] = $logincheck->profile->getSex();
        	$_SESSION['birthdate'] = $logincheck->profile->getBirthDate();
        	$_SESSION['maddress'] = $logincheck->profile->getMAddress();
        	$_SESSION['city'] = $logincheck->profile->getCity();
        	$_SESSION['state'] = $logincheck->profile->getState();
        	$_SESSION['zipcode'] = $logincheck->profile->getZipCode();
        	$_SESSION['telephone'] = $logincheck->profile->getTelephone();
        	$_SESSION['email'] = $logincheck->profile->getEmail();
        	$_SESSION['application'] = $logincheck->profile->getApplication();

        	if($logincheck->profile->getType()==="admin") {
                header('Location: browseC.php');
            } else {
                header('Location: settingsC.php');
            }
        } else {
            session_start();
            $loginAttempts++;
            //$foo = $_SESSION['loginAttempts'];
            settype($foo, "integer");
            //$foo.=$loginAttempts;
            $errorMessage = "Error: Unrecognized Username or Password, You have " . (3 - $loginAttempts) . " Login Attempts Left";

            $_SESSION['errorMessage'] = $errorMessage;
            header('Location: ../index.php');
        }

        //header('Location: ../index.php');
    } else {
        header('Location: AddAccountC.php');

    }
}

?>
