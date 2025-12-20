<?php
// Задача 3
$sum = 1;
$n = rand(10,100);
for ($i=1; $i<$n; $i++) {
    $sum = $sum + $i; 
}

echo $n;
echo '<br>';
echo $sum;

// Задача 4
$list = [];
for ($i=0; $i<10; $i++) {
    $list []= rand(-10,10);
}
$positive = 0;
$zero = 0;
$negative = 0;
foreach ($list as $value) {
    echo $value . ' ';
    if ($value > 0) {
        $positive = $positive + 1;
    } elseif ($value < 0) {
        $negative = $negative + 1;
    } else {
        $zero++;
    }
}
echo '<br>';
echo 'Количество положительных чисел = ' . $positive;
echo '<br>';
echo 'Количество отрицательных чисел = ' . $negative;
echo '<br>';
echo 'Количество нулей = ' . $zero;
echo '<br>';
// Задача 5
$papper = [];
for ($i=0; $i<10; $i++)