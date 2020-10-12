<?php
$arr = array(1, 3, 8, 2, 5, 7, 4, 0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

echo "<br>";

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Bubble Sort) :<br>");
print_r($arr);


function bubble_sort($arr)
{
    for ($q = 1; $q < count($arr); $q++) {
        for ($w = 0; $w < $q; $w++) {
            if ($arr[$q] < $arr[$w]) {
                $tmp = $arr[$q];
                $arr[$q] = $arr[$w];
                $arr[$w] = $tmp;
            }
        }
    }
    return $arr;
}
