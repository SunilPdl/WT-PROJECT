<?php 
    $con = mysqli_connect('localhost','root'); //con = connection
    mysqli_select_db($con,'curd');  //curd is a database name

   // for check database connect or not 
    // if($con){
    //     echo 'Connected';
    // }
    // else{
    //     echo 'Not connected';
    // }
?>