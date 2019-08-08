<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
    <h1>Фото-галерея</h1>
    <?php
        // Подключим конфигурацию и модуль работы с галереей
        require_once('../config/config.php');
        require_once(ENGINE_DIR . 'gallery.php');
        // Вызовем функцию вывода галереи
        fRendering('img', 3);
    ?>
</body>
</html>