<?php

$digits = [1000, 1000, 1000, 5, 12, 993];

for ($i = 0; $i < 2; $i++) {
    $num=[];
    $num[] = max($digits);
    $digits = array_diff($digits, $num);
}

echo max($digits);