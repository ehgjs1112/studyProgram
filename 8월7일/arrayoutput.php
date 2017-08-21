<?php
	$ggom[9][9];
	for($r = 1; $r<10; $r++){
		for($j = 1; $j<10; $j++){
			$sum = $r * $j;
			$result = "$r x $j = $sum";
			$ggom[$r][$j] = $result;
		}	
	}
?>
<?php
		$time=$_POST['times'];
		for($j = 1; $j<10; $j++){
			echo $ggom[$time][$j]."<br/>";
		}
?>
<html>
	<head>
	<meta charset="utf-8">
	<title> 곱하기를 해봅시다 </title>
	</head>

	<body>
		<form action = "arrayoutput.php" method = "post">
			<tr>
				<td><input type = "text" name = "times" size = "1" maxlength = "1"/>  PHP 확인</td>
				<td colspan = "1" style = "text-align: center;"><input type = "submit" value="확인"/></td>
			</tr>
		</form>
	</body>
</html>