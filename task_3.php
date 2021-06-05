<?php
echo 'Создать страницу с формой, состоящей из:
• текстового поля (имя)
• поля выбора пола (как в примере в видео - input type radio).
В зависимости от отправленных данных (значения поля "пол" - М или Ж) выводить приветствие.';

if (isset($_POST['submit']) && !empty($_POST['firstname'])) {

    $a = $_POST['gender'];
    $c = $_POST['firstname'];

    if ($a == 'male') {
        echo "Добро пожаловать, мистер $c!";
    } else {
        echo "Добро пожаловать, миссис $c!";
    }
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Lesson 8 | Task 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action = "task_3.php" method = "post">
                <p> Ваше имя: </p>
                <input type="text" name="firstname"><br>

                <p> Ваш пол: </p>
                <input type="radio" name="gender" value="male" checked="checked">Мужчина<br>
                <input type="radio" name="gender" value="female">Женщина<br><br>

                <input type ="reset" value="Очистить форму" >
                <input type ="submit" value="Отправить" name ="submit">
            </form> 
        </div>
    </body>
</html>
