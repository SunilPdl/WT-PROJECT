<?php

// localhost = host name, root = username, "" = password, askiee = databaseName
$connect = mysqli_connect("localhost", "root", "", "askiee");


// if the connection is lost or corrupted
if(!$connect){
    echo "unable to connect to the server!";
    die();
}