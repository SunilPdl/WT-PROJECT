<?php
SESSION_START();
header('location:login.php');
$con = mysqli_connect("localhost","root");

// if($con){
//     echo "connected.";
// }
// else {
//     echo "Not connected.";
// }

mysqli_select_db($con,'regForm');
$Name = $_POST['user'];
$Password = $_POST['pass'];

$q = " select * from signin where username = '$Name' && password ='$Password' ";

$res = mysqli_query($con,$q);

$num = mysqli_num_rows($res);

if($num == 1){
    echo "Duplicate data...";
}
else{
    $qi = " insert into signin(username , password ) values ('$Name' , '$Password' )";
    mysqli_query($con,$qi);
}

?>