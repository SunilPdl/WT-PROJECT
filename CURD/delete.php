<?php
include "conn.php";
$id = $_GET['ID'];
$q = " DELETE FROM `curdtable` WHERE ID = $id ";
mysqli_query($con,$q);
header('location:display.php');
?>