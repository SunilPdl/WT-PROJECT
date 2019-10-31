<?php

require_once "./connection.php"

	mysqli_query($connect, "DELETE FROM questions WHERE Number = " , $_GET['id']) ;
	header("Location: ../PHP/explore.php") ;

// $id = $_GET['id'];

// if( !is_numeric($id) ){
// 	die("Please give some valid numeric id to edit. Pass id from Query String.(..?id=5)") ;
// }else{
// 	mysqli_query($connection, "DELETE FROM questions WHERE Number = " .$id) ;
// 	header("Location: ../PHP/explore.php") ;
// }	