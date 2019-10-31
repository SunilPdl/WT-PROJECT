<?php

require_once "./connection.php";

	mysqli_query($connect, "DELETE FROM questions WHERE Number = " . $_GET['id']) ;
	header("Location: ../PHP/explore.php") ;
