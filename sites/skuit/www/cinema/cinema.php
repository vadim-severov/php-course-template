<?php
$movie = "avatar";
echo strtoupper($movie);
$age = 15;
if ($age < 16) {
    echo "Доступ запрещён";
}
$ticket = [10, 20, 15];
$sum = 0;
foreach ($ticket as $valy) {
    $sum = $sum + $valy;
}
$hasTicket = true;
if ($hasTicket) {
    echo "Билет имеется";
}else {
    echo "Билет не имеется";
}
function canWatch(int $age): bool {
    return $age < 16;
}
$res1 = canWatch(18);
$res2 = canWatch(12);
?>
