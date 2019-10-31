<?php

    require_once "../SQL/connection.php";

    $sql = 'select * from questions ' ;

    //$result stores result from query
    $result = mysqli_query($connect, $sql) ;

    //mysqli_fetch_all gives us an associative array of sql output
    // and we store it in $questionArray array variable
    $questionArray = mysqli_fetch_all( $result, MYSQLI_ASSOC) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASKIEE/Explore</title>

    <link rel="stylesheet" href="../CSS/style.css"/>
    <link rel="stylesheet" href="../CSS/detail.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

    <!-- head of the explore page -->
    <header class="fix-header">
        <!-- navigation Bar -->
        <nav>
            <a href="#">Explore</a>
            <a href="#contact">Contact</a>
            <a href="./process.php">logout</a>
        </nav>
    </header>

    <div id="top"></div>

    <!-- questions and answer lists -->
    <main class="margin-main">
        <div class="add-div">
            <a href="../HTML/add.html" style="color: black; font-size: 18px">
                <p id="add-link">
                    <u>Ask question</u>+
                </p>
            </a>    
        </div>
        <div class="list-div">
        <?php foreach ($questionArray as $data) {?>
            <ul>
                <li>
                    <i>Q: </i>
                    <?= $data['Question']?>
                    &nbsp;&nbsp;&nbsp;
                    <span title="edit">
                        <a href="../PHP/edit.php?id= <?= $data['Number'] ?>">
                            <i style="color: black;" class="far fa-edit"></i>
                        </a>
                    </span>
                    <span title="delete">
                        <a href="../SQL/delete.php?id= <?= $data['Number'] ?>">
                            <i style="color: red;" class="fas fa-trash-alt"></i>
                        </a>
                    </span>
                    <br/><br/>
                    <span>
                        <u>Tag:</u>
                        <i class="tag">
                            <?= $data['tag']?>
                        </i>
                    </span>
                </li>
            </ul>
        <?php } ?>    
        </div>
    </main>

    <span class="upperArrow">
        <a href="#top">^</a>
    </span>
    
     <!-- foot of the website, contact part -->
     <footer id="contact">
        <address>
                <p>Email : <a href="mailto:abc@gmail.com">abc@gmail.com</a></p>
                <p>Tel : <a href="tel:+061-234521">+061-234521</a></p>
                <a href="#" id="fa-facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" id="fa-instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" id="fa-twit"><i class="fab fa-twitter"></i></a>
        </address>
        <section class="links">
            <h3>Links</h3>
            <a href="#">ClipPath</a><br>
            <a href="#">FontAwesome</a><br>
            <a href="#">Color-Platte</a>
        </section>
    </footer>
</body>
</html>