<?php

include 'conn.php';

if(isset($_POST['submit'])){
    $id = $_GET['ID'];
    $userName = $_POST['username'];
    $Pass = $_POST['password'];
    $q = " UPDATE `curdtable` SET ID = $id, UserName = '$userName', Password = '$Pass' WHERE ID = $id ";
    $query = mysqli_query($con,$q);
    header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class = "col-lg-6 m-auto">
        <form method = "POST"><br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation</h1>
                </div><br>

                <label>Username</label>
                <input type="text" name = "username" class = "form-control"> <br>

                <label>Password</label>
                <input type="text" name = "password" class = "form-control"> <br>

                <button class = "btn btn-success" type = "submit" name = "submit">Submit</button><br>
            </div>
        </form>
    </div>
</body>
</html>