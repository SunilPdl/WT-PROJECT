<?php

require_once "./connection.php";

// variables for question and tag
$question = $_POST['question'];
$tag = $_POST['tag'];

// mysql command
$ques_sql = "insert into questions(question, created_at, tag) values('$question', null ,  '$tag');";

// injecting or quering the mysql command into the table
mysqli_query($connect, $ques_sql);

if(mysqli_affected_rows($connect) > 0){
    echo "question added successfully" ;
    header("Location: ../PHP/explore.php");
}else{
    echo "error" ;
    var_dump(mysqli_error_list($connection));
}