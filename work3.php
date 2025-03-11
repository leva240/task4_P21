<?php
$students = [ 
['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5, 5, 4, 4, 2, 3, 5]],
 ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2, 2, 2, 3, 4, 4, 2]],
 ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 4, 4, 4, 3, 3, 4, 4]], 
];

function ocenka($students) {
$average = array_sum($students['grades']) / count($students['grades']);
}
if ($average >= 4) {
$average = ocenka($students);

echo "{$student['name']}Средняя оценка: " . round($average, 2);
}