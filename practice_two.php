<?php

//Задание 1
$a = 5;
$b = 7;
if($a >= 0 && $b >= 0){
	echo $a-$b;
} else if($a < 0 && $b < 0){
	echo $a*$b;
} else {
	echo $a+$b;
}

//Задание 2
$a = rand(0,15);

switch($a) {
	case 0:
		echo $a++;
	case 1:
		echo $a++;
	case 2:
		echo $a++;
	case 3:
		echo $a++;
	case 4:
		echo $a++;
	case 5:
		echo $a++;
	case 6:
		echo $a++;
	case 7:
		echo $a++;
	case 8:
		echo $a++;
	case 9:
		echo $a++;
	case 10:
		echo $a++;
	case 11:
		echo $a++;
	case 12:
		echo $a++;
	case 13:
		echo $a++;
	case 14:
		echo $a++;
	case 15:
		echo $a++;
		break;
}

//Задание 3
function sum($a, $b) {
	return $a + $b;
}
function diff($a, $b) {
	return $a - $b;
}
function multi($a, $b) {
	return $a * $b;
}
function division($a, $b) {
	return round(($a / $b), 2);
}

//Задание 4
function mathOperation($arg1, $arg2, $operation){
	$operation = trim($operation);
	switch($operation){
		case 'сумма':
			echo sum($arg1, $arg2);
			break;
		case 'разность':
			echo diff($arg1, $arg2);
			break;
		case 'умножение':
			echo multi($arg1, $arg2);
			break;
		case 'деление':
			echo division($arg1, $arg2);
			break;
	}
}
//test
echo mathOperation(-2,3,'сумма').'```';
echo mathOperation(-2,3,'разность').'```';
echo mathOperation(-2,3,'умножение').'```';
echo mathOperation(-2,3,'деление').'```';

//Задание 5, сделано в задании к 1-му уроку
$year = date('Y');

//Задание 6
function power($val, $pow){
	if($pow == 0) {
		return 1;
	}else if($pow == 1){
		return $val;
	} else if ($pow > 1){
		return $val * power($val, $pow-1);
	}
}
//test
echo power(7,0).'``';
echo power(7,1).'``';
echo power(2,5);


//Задание 7
function timeIsNow(){
	$hour = date("G");
	$minute = date("i");
	$hour_name = "";
	$minute_name = "";
	switch($hour) {
		case 1:
		case 21:
			$hour_name = " час";
			break;
		case 2:
		case 3:
		case 4:
		case 22:
		case 23:
			$hour_name = " часа";
			break;
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$hour_name = " часов";
			break;
	}
	//минута
	$res0 = [1, 21, 31, 41, 51];

	//минуты
	$arr1 = range(2,4);
	$arr2 = range(22,24);
	$arr3 = range(32,34);
	$arr4 = range(42,44);
	$arr5 = range(52,54);
	$res1 = array_merge($arr1, $arr2, $arr3, $arr4, $arr5);

	//минут
	$arr11 = range(5,20);
	$arr21 = range(25,30);
	$arr31 = range(35,40);
	$arr41 = range(45,50);
	$arr51 = range(55,59);
	$res2 = array_merge($arr11, $arr21, $arr31, $arr41, $arr51);

	if(in_array($minute, $res0)){
		$minute_name = " минута";
	} else if(in_array($minute, $res1)) {
		$minute_name = " минуты";
	} else if(in_array($minute, $res2)){
		$minute_name = " минут";
	}

	return $hour.$hour_name." ". $minute.$minute_name;
}

?>

