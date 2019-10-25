<?php
    require_once "../SQL/connection.php";

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
</head>
<body>
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
                        <textarea name="question" cols="90" rows="10" value="<?= $previous['question']?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tag:
                    </td>
                    <td>
                        <input type="radio" name="tag" value="science"/>SCIENCE
                        <input type="radio" name="tag" value="technology"/>TECHNOLOGY
                        <input type="radio" name="tag" value="maths"/>MATHS
                        <input type="radio" name="tag" value="history"/>HISTORY
                        <input type="radio" name="tag" value="general"/>GENERAL
                    </td>
                </tr>
            </table>
            <input type="submit" value="Ask"/>
        </form>
    </div>
</body>
</html>