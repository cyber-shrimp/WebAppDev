<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЛР2: Рогинская А.Е., группа 241-353, вариант 8</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Логотип университета" class="logo">
        <div>
            <h1>Лабораторная работа №2</h1>
            <p>Рогинская Александра Евгеньевна | Группа 241-353 | Вариант 8</p>
        </div>
    </header>

     <main>
        <h2>Табулирование функции (вариант 8)</h2>

        <?php
        // числовые переменных
        $start = -5; // начальное знач
        $count = 20; // количество знач
        $step = 1.5; // шаг изменения
        $min_limit = -1000; // мин знач до стопа
        $max_limit = 1000; // макс знач до стопа

        // верстка
        $type = 'E'; 

        // массив для знач
        $values = [];
        $stop_flag = false;

        function computeFunction($x) {
            if ($x <= 10) {
                return 7 * $x + 18;
            } 
            elseif ($x < 20) {
                // (x-17)/(8-x*0.5)
                $denominator = 8 - $x * 0.5;
                if ($denominator == 0) {
                    return 'error'; // деление на ноль
                }
                return ($x - 17) / $denominator;
            } 
            else {
                return ($x + 4) * ($x - 7);
            }
        }

        switch ($type) {
            case 'B':
                echo '<ul>';
                break;
            case 'C':
                echo '<ol>';
                break;
            case 'D':
                echo '<table border="1" cellpadding="5" cellspacing="0">';
                echo '<table><th>№</th><th>x</th><th>f(x)</th></tr>';
                break;
            case 'E':
                echo '<div class="block-container">';
                break;
            // case 'A' — ничего не выводим (нет открывающих тегов)
        }

        // основной цикл
        $x = $start;
        for ($i = 0; $i < $count; $i++, $x += $step) {
            
            // вычисляем значение
            $f = computeFunction($x);
            
            // если не ошибка то округляем до 3х знаков
            if ($f !== 'error') {
                $f = round($f, 3);
            }
            
            // проверка на остановку по min/max
            if (is_numeric($f) && ($f >= $max_limit || $f <= $min_limit)) {
                $stop_flag = true;
                break;
            }
            
            // сохраняем числовые значения
            if (is_numeric($f)) {
                $values[] = $f;
            }
            
            // вывод согласно типу верстки
            switch ($type) {
                case 'A':
                    // простая верстка с <br>
                    echo "f($x)=$f<br>";
                    break;
                    
                case 'B':
                    // маркированный список
                    echo "<li>f($x)=$f</li>";
                    break;
                    
                case 'C':
                    // нумерованный список
                    echo "<li>f($x)=$f</li>";
                    break;
                    
                case 'D':
                    // табличная верстка
                    echo "<tr>";
                    echo "<td>" . ($i + 1) . "</td>";
                    echo "<td>$x</td>";
                    echo "<td>$f</td>";
                    echo "</tr>";
                    break;
                    
                case 'E':
                    // блочная горизонтальная верстка
                    echo "<div class='horiz-block'>f($x)=$f</div>";
                    break;
            }
        }
        
        // закрытие тегов
        switch ($type) {
            case 'B':
                echo '</ul>';
                break;
            case 'C':
                echo '</ol>';
                break;
            case 'D':
                echo '</table>';
                break;
            case 'E':
                echo '</div>';
                break;
            // case 'A' — ничего не закрываем
        }
        
        //вывод статистики
        if (count($values) > 0) {
            $sum = array_sum($values);
            $avg = $sum / count($values);
            $max_val = max($values);
            $min_val = min($values);
            
            echo '<div class="stats">';
            echo '<h3>Статистика</h3>';
            echo '<p><strong>Сумма:</strong> ' . round($sum, 3) . '</p>';
            echo '<p><strong>Среднее арифметическое:</strong> ' . round($avg, 3) . '</p>';
            echo '<p><strong>Максимум:</strong> ' . round($max_val, 3) . '</p>';
            echo '<p><strong>Минимум:</strong> ' . round($min_val, 3) . '</p>';
            echo '</div>';
        } else {
            echo '<p>Нет числовых значений для статистики.</p>';
        }
        
        // сообщение об остановке
        if ($stop_flag) {
            echo '<p class="stop-msg">Вычисления остановлены: достигнута граница min или max значения функции.</p>';
        }
        ?>
    </main>

    <footer>
        Тип верстки: <?php echo $type; ?>
    </footer>
</body>
</html>