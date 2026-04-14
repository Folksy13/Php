<?php

// 1
$F = [1, 2, 3, 4, 5];
foreach ($F as $v) {
    echo $v . " ";
}

// 2
$F = ["Luca", "Anna", "Marco", "Sara"];
foreach ($F as $n) {
    echo $n . "\n";
}

// 3
$F = [5, 12, 7, 20];
foreach ($F as $v) {
    if ($v > 10) echo $v . " ";
}

// 4
$F = [1, 2, 3, 4, 5, 6];
$s = 0;
foreach ($F as $v) {
    $s += $v;
}
echo $s;

// 5
$F = [2, 4, 6, 8, 10];
foreach ($F as $v) {
    echo ($v * 2) . " ";
}

// 6
$F = [1, 2, 3, 4, 5, 6];
foreach ($F as $v) {
    if ($v % 2 == 0) echo $v . " ";
}

// 7
$F = [2, 8, 6, 3, 10];
$c = 0;
foreach ($F as $v) {
    if ($v > 5) $c++;
}
echo $c;

// 8
$F = [4, 9, 2, 7];
$m = $F[0];
foreach ($F as $v) {
    if ($v > $m) $m = $v;
}
echo $m;

// 9
$F = [10, 20, 30, 40, 50];
foreach ($F as $i => $v) {
    if ($i % 2 == 0) echo $v . " ";
}

// 10
$F = [1, 2, 3, 4];
foreach ($F as &$v) {
    $v *= 3;
}
print_r($F);

// 11
$F = [5, 6, 7];
foreach ($F as $i => $v) {
    echo $i . " => " . $v . "\n";
}

// 12
$F = [1, 2, 3, 4];
$n = [];
foreach ($F as $v) {
    array_unshift($n, $v);
}
print_r($n);

// 13
$F = [1, 2, 2, 3, 1];
$u = [];
foreach ($F as $v) {
    if (!in_array($v, $u)) $u[] = $v;
}
print_r($u);

// 14
$F = [1, 2, 3, 4, 5];
$d = [];
foreach ($F as $v) {
    if ($v % 2 != 0) $d[] = $v;
}
print_r($d);

// 15
$F = [3, -2, 5, -1];
foreach ($F as &$v) {
    if ($v < 0) $v = 0;
}
print_r($F);

?>
