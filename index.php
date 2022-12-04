<?php
// Строка:
$string = "Nature";
// Загрузка рисунка фона
$im = imageCreateFromJpeg("img.jpg");
// Создание в палитре нового цвета — черного.
$color = imageColorAllocate($im, 255, 255, 0);
// Размер шрифта
$size = 5;
// Сдвиг надписи
$offset = strlen($string) / 2 * $size;
// Вычисление x для расположения текста по ширине
$x = (imageSX($im) - strlen($string)) / 2 - $offset;
$y = 50;
// Вывод строки поверх загруженного изображения.
imageString($im, $size, $x, $y, $string, $color);
// Вывод картинки в стандартный выходной поток - в браузер
header("Content-type: image/png");
imageJpeg($im); // освобождение памяти, занятой картинкой 
imageDestroy($im);
