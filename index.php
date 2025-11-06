<!DOCTYPE html>
<html>
<head>
    <title>Мой первый PHP-сайт</title>
</head>
<body>

    <h1>Приветствие</h1>
    <?php
        // Это простой комментарий в PHP
        $greeting = "Привет, мир!";
        echo "<p>" . $greeting . "</p>";

        // Пример вывода текущей даты
        echo "<p>Сегодня: " . date("d.m.Y") . "</p>";
    ?>

    <p>Это обычный HTML. ^_^</p>

</body>
</html>
