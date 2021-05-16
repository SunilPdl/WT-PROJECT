<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <h2>Login form</h2>
                <form action="validate.php" method = "POST">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name = "user" class = "form-control" value ="" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name = "pass" class = "form-control"value ="" required>
                    </div>  

                    <button type = "submit" name = "login" class = "btn btn-primary">login</button>                  
                </form>
            </div>

            <div class="col-lg-6">
            <h2>Sign in form</h2>
                <form action="registration.php" method = "POST">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name = "user" class = "form-control" value ="" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name = "pass" class = "form-control" value =""required>
                    </div>  

                    <button type = "submit" name = "signin" class = "btn btn-primary">sign in</button>                  
                </form>
            </div>            
        </div>
    </div>
</body>
</html>