<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
    <h1>Фото-галерея</h1>
    <?php
        // Подключим файл с модулем функций работы с галереей
        include_once('../engine/gallery.php');
        // Вызовем функцию вывода галереи
        fRendering('img', 5);
    ?>
</body>
</html>