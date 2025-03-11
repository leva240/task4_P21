<?php
$marks = [5, 4, 3, 3, 4, 2, 5];

function Ocenka($marks) {
    $allmarks = count($marks);
    $summarks = array_sum($marks);
    return $summarks / $allmarks;
}

$average = Ocenka($marks);

echo "Средняя оценка: " . round(num: $average, precision: 2);