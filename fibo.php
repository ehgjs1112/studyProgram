<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title> 피보피보 </title>
</head>
<body>
<?php 
	$nn=2;
	$num = 0;
	//$mm=$nn;
	echo "<table border = 1>";
	for($i = 1; $i <= $nn; $i++){
		echo "<tr>";
		for($j = 1; $j <= $i; $j++){
			
			//if($j < $mm){
			//	echo "<td> &nbsp; </td>";
			//}
			//else{
				$num++;
				echo "<td>$num</td>";
			//}
		}
		//$mm--;
		echo "</tr>";
	}
	echo "</table>";
echo "//////////////////////////1111111111111111//////////////////////////";
	$num = 0;
	$mm = 2;
	echo "<table border = 1>";
	for($i = $mm; $i >= 1; $i--){
		echo "<tr>";
		for($j = 1; $j <= $i; $j++){
			$num++;
			echo "<td>$num</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
echo "/////////////////////////222222222222222222//////////////////////////";
	$nn=4;
	$num = 0;
	echo "<table border = 1>";
	for($i = 0; $i <= $nn; $i++){
		echo "<tr>";
		for($j = 0; $j < $i; $j++){
			$num++;
			echo "<td>$num</td>";
		}
		echo "</tr>";
	}
	for($nn=$nn; $nn >= 1; $nn--){
		echo "<tr>";
		for($j = 1; $j < $nn; $j++){
				$num++;
				echo "<td>$num</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
echo "/////////////////////////333333333333333//////////////////////////";
	$nn = 4;
	$num = 0;
	echo "<table border = 1>";
	for($i = 0; $i < $nn; $i++){
		echo "<tr>";
		for($j = 1; $j <= $nn; $j++){
			$start = $nn-$i;
			 if($start <= $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> &nbsp </td>";
		}
		echo "<tr/>";
	}
	echo "</table>";
echo "//////////////////////////4444444444444444//////////////////////////";
	$nn = 4;
	$num = 0;
	echo "<table border = 1>";
	for($i = 0; $i < $nn; $i++){
		echo "<tr>";
		for($j = $nn; $j >= 1; $j--){
			$start = $nn-$i;
			 if($start >= $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> &nbsp </td>";
		}
		echo "<tr/>";
	}
	echo "</table>";
echo "///////////////////////////////////////////////////////////////////////////";
	$nn =6;
	$num = 0;
	echo "<table border = 1>";
	
	for($i = 1; $i < $nn; $i++){
		echo "<tr>";
		for($j = 0; $j < $nn; $j++){
			$start = $nn-$i;
			 if($start <= $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> &nbsp </td>";
		}
		echo "<tr/>";
	}
	for($i = 0; $i < $nn; $i++){
		echo "<tr>";
		for($j = $nn; $j > 0; $j--){
			$start = $nn-$i;
			 if($start >= $j){
				$num++;
				echo "<td>$num</td>";
			 }
			 else
				echo "<td> &nbsp </td>";
		}
		echo "<tr/>";
	}
	echo "</table>";
echo "//////////////////////////555555555555555555//////////////////////////";
	$num = 0;
	$nn = 5;
	echo "<table border = 1>";
		for($i = 0; $i<$nn; $i++){
			echo "<tr>";
			for($j = 1; $j <= ($nn*2 -1); $j++){
				if($nn+$i >= $j && $nn-$i <= $j){
					$num++;
					echo "<td>$num</td>";
				}
				else
					echo "<td> &nbsp </td>";
		}
		echo "</tr>";
	}
	echo "</table>";
echo "//////////////////////////66666666666666666//////////////////////////";
	$num = 0;
	$nn = 5;
	echo "<table border = 1>";
		for($i = $nn; $i>0; $i--){
			echo "<tr>";
			for($j = 1; $j <= ($nn*2 -1); $j++){
				if($nn+$i > $j && $nn-$i < $j){
					$num++;
					echo "<td>$num</td>";
				}
				else
					echo "<td> &nbsp </td>";
		}
		echo "</tr>";
	}
	echo "</table>";
echo "//////////////////////////777777777777777777777777///////////////////////////";
	$num = 0;
	$nn = 6;
	echo "<table border = 1>";
	for($i = 0; $i<$nn; $i++){
			echo "<tr><br/>";
			for($j = 1; $j <= ($nn*2 -1); $j++){
			$end = $nn+$i;
			$start = $nn-$i;
			echo "start :".$start."end :".$end."<br/>";
			if($end >= $j && $start <= $j){
					$num++;
					echo "<td>$num</td>";
				}
				else
					echo "<td> &nbsp </td>";
		}
		echo "</tr>";
		
	}
	for($i = $nn; $i > 1; $i--){
			echo "<tr><br/>";
		for($j = 1; $j <= ($nn*2 -1); $j++){
			$end = $nn+$i -1;
			$start = $nn-$i +1;
			echo "start :".$start."end :".$end."<br/>";
			if($start < $j && $end > $j)
			
			{
				$num++;
				echo "<td>$num</td>";
			}
			else
				echo "<td> &nbsp </td>";
		}
		echo "</tr>";
	}

	echo "</table>";
echo "//////////////////////////88888888888888///////////////////////////";
	$num = 0;
	$nn = 10;
	$con_num = 0;
	echo "<table border = 1>";
	for($i = 1; $i <= ($nn*2-1); $i++){
		echo "<tr>";
		for($j = 1; $j <= ($nn*2-1); $j++){
			if($j < $nn + $con_num AND $j > $nn - $con_num){
				echo "<td width = 20></td>";
			}
			else{
				$num++;
				echo "<td>$num</td>";
			}
		}
		if($i < $nn)
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