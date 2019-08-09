<?php

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


