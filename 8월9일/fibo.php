<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title> 피보피보 </title>
</head>
<body>
<?php 
	$num = 0;
	echo "<table border = 1>";
	for($i = 1; $i <= 5; $i++){
		echo "<tr>";
		for($j = 1; $j < $i; $j++){
			$num++;
			echo "<td>$num</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
//////////////////////////1111111111111111//////////////////////////
	$num = 0;
	echo "<table border = 1>";
	for($i = 5; $i >= 1; $i--){
		echo "<tr>";
		for($j = 1; $j < $i; $j++){
			$num++;
			echo "<td>$num</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
//////////////////////////22222222222222222///////////////////////////
	$num = 0;
	echo "<table border = 1>";
	for($i = 1; $i < 5; $i++){
		echo "<tr>";
		$start = 5 - $i;
		for($j = 1; $j < 5; $j++){
			 if($start <= $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> </td>";
		}
		echo "<tr/>";
	}
	echo "</table>";
//////////////////////////////333333333333333333///////////////////////
	$num = 0;
	echo "<table border = 1>";
	for($i = 5; $i > 1; $i--){
		echo "<tr>";
		$start = 5 - $i;
		for($j = 1; $j < 5; $j++){
			 if($start < $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> </td>";
		}
		echo "</tr>";
	}
	echo "</table>";
/////////////////////////////444444444444444444////////////////////////
	$num = 0;
	$middle = 4;
	$con_num = 0;
	echo "<table border = 1>";
	for($i = 1; $i < 5; $i++){
		echo "<tr>";
		for($j = 1; $j < 8; $j++){
			if($j <= $middle + $con_num AND $j >= $middle - $con_num){
				
				$num++;
				echo "<td>$num</td>";
			}
			else
				echo "<td> </td>";
		}
		$con_num++;
		echo "</tr>";
	}
	echo "</table>";
/////////////////////////55555555555555555555////////////////////////////
	$num = 0;
	$middle = 4;
	$con_num = 3;
	echo "<table border = 1>";
	for($i = 1; $i < 5; $i++){
		echo "<tr>";
		for($j = 1; $j < 8; $j++){
			if($j <= $middle + $con_num AND $j >= $middle - $con_num){
				$num++;
				echo "<td>$num</td>";
			}
			else
				echo "<td> </td>";
		}
		$con_num--;
		echo "</tr>";
	}
	echo "</table>";
//////////////////////////666666666666666666666///////////////////////////
	$num = 0;
	$middle = 5;
	$con_num = 0;
	echo "<table border = 1>";
	for($i = 1; $i < 10; $i++){
		echo "<tr>";
		for($j = 1; $j < 10; $j++){
			if($j <= $middle + $con_num AND $j >= $middle - $con_num){
				$num++;
				echo "<td>$num</td>";
			}
			else
				echo "<td> </td>";
		}
		if($i < 5)
			$con_num++;
		else	
			$con_num--;
		echo "</tr>";
	}
	echo "</table>";
//////////////////////////7777777777777777777///////////////////////////
	$num = 0;
	$middle = 5;
	$con_num = 0;
	echo "<table border = 1>";
	for($i = 1; $i < 10; $i++){
		echo "<tr>";
		for($j = 1; $j < 10; $j++){
			if($j < $middle + $con_num AND $j > $middle - $con_num){
				echo "<td width = 20></td>";
			}
			else{
				$num++;
				echo "<td>$num</td>";
			}
		}
		if($i < 5)
			$con_num++;
		else	
			$con_num--;
		echo "</tr>";
	}
	echo "</table>";
//////////////////////////8888888888888888888888///////////////////////////
?> 
</body>
</html>