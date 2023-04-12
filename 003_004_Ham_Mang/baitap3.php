<?php
$arr = [
    [1, 5, 6, 9, 8, 12],
    [2, 5, 6, 4, 6, 15]
];

$max = $arr[0][0];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 1; $j < count($arr[$i]); $j++) {
        if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
        }
    }
}
echo 'Số lớn nhất là : ' . $max;
echo '<br>'
?>



<?php
$array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$max = $array[0][0];

foreach ($array as $array1) {
    foreach ($array1 as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
}

echo "Giá trị lớn nhất trong mảng là: " . $max;
?>