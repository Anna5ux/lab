<?php
// Вариант 6: среднее арифметическое трёх чисел
$num1 = 12;
$num2 = 27;
$num3 = 33;

// Вычисление среднего
$average = ($num1 + $num2 + $num3) / 3;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 1: среднее арифметическое</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .result { font-weight: bold; color: #2c3e50; }
    </style>
</head>
<body>
    <h1>Лабораторная работа 1</h1>
    <p>Задача: вычислить среднее арифметическое трёх чисел.</p>
    <p>Числа: <?php echo $num1; ?>, <?php echo $num2; ?>, <?php echo $num3; ?></p>
    <p class="result">Среднее арифметическое: <?php echo number_format($average, 2); ?></p>
</body>
</html>
