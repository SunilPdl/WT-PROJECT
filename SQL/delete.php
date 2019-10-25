<?php

require_once "./connection.php"

if(is_numeric($_GET['id'])){
	$id = $_GET['id'] ;
}

if(! $id ){
	die("Please give some valid numeric id to edit. Pass id from Query String.(..?id=5)") ;
}

        mysqli_query($connection, "DELETE FROM questions WHERE Number = $id") ;
		header("Location: ../PHP/explore.php") ;