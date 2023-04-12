<?php
$numbers = 35;
$count = 0;
$n = 2;

while ($count < $numbers) {
    $KiemTra = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $KiemTra = false;
            break;
        }
    }
    if ($KiemTra) {
        echo $n . ' ';
        $count++;
    }
    $n++;
}
?>
