<html>
	<head>
	<meta charset="utf-8">
	<title> 곱하기를 해봅시다 </title>
	</head>

	<body>
		<form action = "new_new_gugudandb.php" method = "post">
			<tr>
				<td><input type = "text" name = "times" size = "1" maxlength = "1"/>  PHP 확인</td>
				<td colspan = "1" style = "text-align: center;"><input type = "submit" value="확인"/></td>
			</tr>
		</form>
<?php
	$ggom[9][9];
	$servername = "localhost";
	$username = "sa";
	$password = "isdu804m";
	$dbname = "gugudandb";
	@$db = new mysqli($servername,$username,$password,$dbname);
	@$db = mysqli_connect($servername,$username,$password,$dbname);
	if($db){
			$sql = "select *from gugudandb order by id desc";
			$new_save_data = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($new_save_data);
			if($row[1] != "9 x 9 = 81"){
				for($r = 2; $r<10; $r++){
					for($j = 1; $j<10; $j++){
						$sum = $r * $j;
						$result = "$r x $j = $sum";
						$ggom[$r][$j] = $result;		
						$sql = "insert into gugudandb(gugudandb) values";
						$timedata = "('".$ggom[$r][$j]."')";
						$sql = $sql.$timedata;
						$db->query($sql);
					}
				}
			}		
	}
	else
		echo "db_connect_fail";
?>
<?php
		$time=$_POST['times'];
		$second = ($time - 1) * 9;
		$first = $second - 8;
		if($time and $time != 1){
		$sql = "SELECT gugudandb from gugudandb where id between ".$first." "."and"." ".$second;
		//$sql = "select *from gugudandb where gugudandb like '".$time."%';";
		//$sql = "select *from gugudandb where substr(gugudandb.gugudandb,1,1) = ".$time;
		$new_save_data = mysqli_query($db,$sql);
		echo $time."단입니다.";
		echo '<br/>';
		while($row = mysqli_fetch_row($new_save_data)){
			echo $row[0].'<br/>';	
		}
		}
?>
	</body>
</html>