<html>
	<head>
	<meta charset="utf-8">
	<title> 곱하기를 해봅시다 </title>
	</head>

	<body>
		<form action = "gugudandb.php" method = "post">
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
				for($r = 1; $r<10; $r++){
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
		switch($time){
			case '1':
				echo "1단";
				$sql = "SELECT gugudandb from gugudandb where id between 1 and 9";
			break;
			case '2':
				echo "2단";
				$sql = "SELECT gugudandb from gugudandb where id between 10 and 18";
			break;
			case '3':
				echo "3단";
				$sql = "SELECT gugudandb from gugudandb where id between 19 and 27";
			break;
			case '4':
				echo "4단";
				$sql = "SELECT gugudandb from gugudandb where id between 28 and 36";
			break;
			case '5':
				echo "5단";
				$sql = "SELECT gugudandb from gugudandb where id between 37 and 45";
			break;
			case '6':
				echo "6단";
				$sql = "SELECT gugudandb from gugudandb where id between 46 and 54";
			break;
			case '7':
				echo "7단";
				$sql = "SELECT gugudandb from gugudandb where id between 55 and 63";
			break;
			case '8':
				echo "8단";
				$sql = "SELECT gugudandb from gugudandb where id between 64 and 72";
			break;
			case '9':
				echo "9단";
				$sql = "SELECT gugudandb from gugudandb where id between 73 and 81";
			break;
			default:
				echo "선택 안했어영";
			break;
		}
		$new_save_data = mysqli_query($db,$sql);
		echo '<br/>';
		while($row = mysqli_fetch_row($new_save_data)){
			echo $row[0].'<br/>';	
		}
?>
	</body>
</html>