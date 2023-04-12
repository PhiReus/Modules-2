<?php
//câu câu lệnh if
$a = 4;
if ($a < 30) {
    echo 'Hello World';
}
?>

<?php
//câu lệnh if else
$a = 5;
if ($a < 20) {
    echo 'Hi Java';
} else {
    echo 'Sorry Java';
}
?>

<?php
//if else if else
$a = 6;
if ($a < 20) {
    echo 'chao buoi sang';
} else if ($a < '40') {
    echo 'chao buoi trua';
} else {
    echo 'chao buoi toi';
}
?>
<?php 
//while
$x = 1;

do {
    echo 'the number is : $x <br>';
    $x++;
} while($x <= 5)
?>

<?php 
//for
for ($x = 0; $x <= 10; $x++) {
    echo 'the number is : $x <br>';
}
?>

<?php
//for each
$colors = array('red','green','blue','yellow');

foreach ($colors as $value) {
    echo '$value <br>';
}

?>


