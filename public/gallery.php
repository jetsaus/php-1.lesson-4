<?php
    require_once '../config/config.php';
    echo render(TEMPLATES_DIR . 'gallery.tpl', [
        'title'     => 'Животные',
        'h4'        => 'Мои любимые животные',
        'content'   => 'Фото-галерея животных:'
    ]);
    photoRendering(IMG_DIR, 3);