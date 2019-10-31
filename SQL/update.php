<?php

require_once "./connection.php";

$id = $_POST['id'];
$ques = $_POST['question'];
$tag = $_POST['tag'];

    $sql = "UPDATE questions SET 
            Question = '$ques',
            tag = '$tag' 
        WHERE number = $id ";

mysqli_query($connect, $sql) ;

if(mysqli_affected_rows($connect) == 1){
    //for successfully updated case
    header("Location: ../PHP/explore.php") ;
}else{
    //if the row was not updated
    header("Location: ../PHP/edit.php?message=Some error occurred while updating.") ;
    // var_dump(mysqli_error_list($connect));
}