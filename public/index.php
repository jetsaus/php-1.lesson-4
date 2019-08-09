<?php
    require_once '../config/config.php';
    echo render(TEMPLATES_DIR . 'index.tpl', [
            'title'     => 'фотогалерея',
            'h1'        => 'Фотографии животных',
            'content'   => 'На этом сайте вы можете посмотреть фотогалерею животных'
    ]);