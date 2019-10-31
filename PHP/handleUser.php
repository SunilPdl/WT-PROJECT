<?php

if(isset($_POST['signup'])){
	require_once "../SQL/connection.php";

// starting the session
session_start();

// Details of the users
$email = $_POST['email'];
$user = $_POST['Uname'];
$pass = $_POST['pass'];
$Repass = $_POST['pass2'];

// if all the info are valid
if($pass == $Repass){

	$_SESSION['Uname'] = $user;

    $sql = "insert into users(userName, email, password) values('$user', '$email', '$pass');";

    mysqli_query($connect, $sql) ;
	
	//to make sure at least one row is affected
	if(mysqli_affected_rows($connect) > 0){
		include_once "../PHP/explore.php";
	}else{
		echo "error" ;
		var_dump(mysqli_error_list($connect)) ;
	}
}else{
	session_destroy();
    header("location: ../HTML/index.html");
}
}