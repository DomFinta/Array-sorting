<?php
require_once('app/ArraySort.php');

$arr = [
    '0' => 'ahoj1',
    '1' => 'Ahoj10',
    '2' => 'ahoj12',
    '3' => 'Ahoj2',
    '4' => 'ahoj3',
    ];

$sorter = new app\ArraySort($arr);

var_dump($sorter->naturalOrderSorting());