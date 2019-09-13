<?php
//1
$arr = ['a', 'b', 'c'];
foreach ($arr as $my_arr)
{
    var_dump( $my_arr."<br />");
}

//2
$arr = ['a', 'b', 'c'];
foreach ($arr as $my_arr)
{
    echo $my_arr;
}

//3
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[0].'-'.$arr[3].','.$arr[0].'/'.$arr[3];

//4
$arr = [2, 5, 3, 9];
$result = ($arr[0]*$arr[1]) + ($arr[2]*$arr[3]);
echo $result;

//5
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;