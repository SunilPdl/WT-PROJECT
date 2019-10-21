<?php 

// require_once "../PHP/handleUser.php";
require_once "./connection.php";

$answer = $_POST['answer'];

$sql = "insert into answers(user, answer) values("$_SESSION['Uname']", '$answer');";

mysqli_query($connect, $sql);

if(mysqli_affected_rows($connect) > 0){
    echo "answer added successfully" ;
    header("Location: ../PHP/explore.php");
}else{
    echo "error" ;
    var_dump(mysqli_error_list($connection));
} 
