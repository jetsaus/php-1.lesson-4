<?php
// Функция вывода шаблона
function render($file, $variables = [])
{
	if (!is_file($file)) {
		echo 'Файл шаблона "' . $file . '" не найден';
		exit();
	}
	if (filesize($file) === 0) {
		echo 'Файл шаблона "' . $file . '" пуст';
		exit();
	}
	
	$templateContent = file_get_contents($file);
	
	if (empty($variables)) {
	    return $templateContent;
    }

	foreach ($variables as $key => $value) {
		if (is_array($value)) {
			continue;
		}
		$key = '{{' . strtoupper($key) . '}}';
		$templateContent = str_replace($key, $value, $templateContent);
	}
	return $templateContent;
}

// Функция вывода фотогалереи
    function photoRendering(
        $fDir = 'img',  // Папка с изображениями
        $fColumns = 3   // Количество колонок в строке
    )
    {
        $dir = "$fDir/";           // Папка с изображениями
        $columns = $fColumns;    // Количество столбцов при создании таблицы
        $files = scandir($dir); // все изображения из папки
        natsort($files);        // сортируем в привычном для человека порядке
        echo '<table>';         // откроем тег таблицы
        $k = 0;                 // счетчик картинок в троке
        //  Цикл по всем файлам в каталоге
        foreach ($files as $photo) {
            // Текущий каталог и родительский пропускаем
            if (($photo != '.') && ($photo != '..')) {
                if ($k % $columns == 0) echo '<tr>';                        // Добавляем новую строку
                echo '<td>';                                                // Начинаем столбец
                $path = $dir . $photo;                                      // Получаем путь к картинке
                echo "<a href=$path target=_blank>";                        // Делаем ссылку на картинку
                echo "<img src=$path alt='Фото' width='100' />";            // Вывод превью картинки
                echo '</a>'; // Закрываем ссылку
                echo '</td>'; // Закрываем столбец
                //переход на следеющею строку при заполнении
                if ((($k + 1) % $columns == 0)) echo "</tr>";
                // Увеличиваем  счётчик картинок в строке
                $k++;
            }
        }
        
        echo '</table>';        // закроем тег таблицы
    }