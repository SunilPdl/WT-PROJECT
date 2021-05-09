<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="col-lg-12">
            <h2 class = "text-warning text-center">Display Details:</h2><br>
            <table class="table table-striped table-hover table-bordered">
            
            <tr class = "bg-dark text-white text-center">
                <th>ID</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php 
                include 'conn.php';

                $q = "select * from curdtable";
                $query = mysqli_query($con , $q);
                while($res = mysqli_fetch_array($query)){

            ?>

            <tr class = "text-center">
                <td> <?php  echo $res['ID']; ?> </td>
                <td> <?php  echo $res['UserName']; ?> </td>
                <td> <?php  echo $res['Password']; ?> </td>
                <td> <button class = "btn-danger btn"><a href="delete.php?ID=<?php  echo $res['ID']; ?>" class = "text-white">Delete</a></button></td>
                <td> <button class = "btn-success btn"><a href="update.php?ID=<?php  echo $res['ID']; ?>" class = "text-white">Update</a></button></td>
            </tr>
            <?php 
            }

            ?>

            </table>
        </div>
    </div>
</body>
</html>