<?php

include './jdf.php';

$year = date('Y');
$month = date('m');
$day = date('d');
$loginDate = gregorian_to_jalali($year, $month, $day ,'/');

echo $loginDate;