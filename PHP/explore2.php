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
    <script defer scr="../JS/script.js"></script>
</head>
<body>
    <!-- head of the explore page -->
    <header>
        <!-- navigation Bar -->
        <nav>
            <a href="#">Explore</a>
            <a href="#contact">Contact</a>
            <button>Signup</button>
        </nav>
    </header>

    <div id="top"></div>
    <!-- questions and answer lists -->
    <main>
        <div class="add-div">
            <a href="#" style="color: black; font-size: 18px" onclick="alert('Please signup or login first')">
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
                    <?= $data['Question']?><br/><br/>
                    <span>
                        Tag:
                        <i class="tag">
                            <?= $data['tag']?>
                        </i>
                    </span>
                </li>
            </ul>
        <?php } ?>    
        </div>
    </main>

    <!-- signUp pop up box -->
    <div class="signup-bg" value="close"></div>

        <div class="signup-box">
            <span class="close-signup"> &times; </span>
            <form action="../PHP/handleUser.php" method="POST">
                <h3>Sign-up</h3>
                <table>
                    <tr>
                        <td>Email :</td>
                        <td>
                            <input type="email" name="email"/>
                        </td>
                    </tr>
                    <tr>
                        <td>UserName :</td>
                        <td>
                            <input type="text" name="Uname"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td>
                            <input type="password" name="pass"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Retype :</td>
                        <td>
                            <input type="password" name="pass2"/>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="SIgnUp"/>
                or <button onclick="login_popup()" style="color: black;">Login</button>
            </form>
        </div>

    <span class="upperArrow">
        <a href="#top">^</a>
    </span>
    
     <!-- foot of the website, contact part -->
     <footer id="contact">
        <address>
            <pre>
                Email : <a href="mailto:abc@gmail.com">abc@gmail.com</a>
                Tel : <a href="tel:+061-234521">+061-234521</a>
            </pre>
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