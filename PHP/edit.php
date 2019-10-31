<?php
    require_once "../SQL/connection.php";

    $id = $_GET['id'];

    $previousDataResult = mysqli_query($connect, "SELECT * FROM questions WHERE Number = ". $id ) ;
    $previous = mysqli_fetch_assoc($previousDataResult) ;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Askiee/Ask</title>

    <link rel="stylesheet" href="../CSS/style.css"/>
    <link rel="stylesheet" href="../CSS/add_edit.css"/>
    <script defer src="../JS/script.js"></script>
</head>
<body onload="check_tag()">
    <div class="text-add">
        <h3>Edit Question</h3>
    </div>
    <div class="add-edit-form">
        <form action="../SQL/update.php" method="POST">
            <table class="add-table">
                <tr>
                    <td>
                        Question:
                    </td>
                    <td>
                        <textarea name="question" cols="90" rows="10"><?= $previous['Question']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tag:
                    </td>
                    <td>
                        <input type="radio" name="tag" value="science" 
                            <?php
                                if($previous['tag'] == 'science'){
                                    echo "checked";
                                }
                            ?>
                        />SCIENCE
                        <input type="radio" name="tag" value="technology" 
                            <?php
                                if($previous['tag'] == 'technology'){
                                    echo "checked";
                                }
                            ?>
                        />TECHNOLOGY
                        <input type="radio" name="tag" value="maths" 
                            <?php
                                if($previous['tag'] == 'maths'){
                                    echo "checked";
                                }
                            ?>
                        />MATHS
                        <input type="radio" name="tag" value="history" 
                            <?php
                                if($previous['tag'] == 'history'){
                                    echo "checked";
                                }
                            ?>
                        />HISTORY
                        <input type="radio" name="tag" value="general" 
                            <?php
                                if($previous['tag'] == 'general'){
                                    echo "checked";
                                }
                            ?>
                        />GENERAL
                    </td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?= $id ?>"/>
            <input type="submit" value="edit"/>
        </form>
    </div>
</body>
</html>