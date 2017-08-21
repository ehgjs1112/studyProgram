<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title> 구구단 DB 저장 </title>
</head>
<body>
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
		ini_set('display_errors', 1); 
		ini_set('error_reporting', E_ALL);
		$servername = "localhost";
		$username = "sa";
		$password = "isdu804m";
		$dbname = "gugudandb";
		$sql = "insert into gugudandb(times) values";
		@$db = new mysqli($servername,$username,$password,$dbname);
		@$db = mysqli_connect($servername,$username,$password,$dbname);
		if($db){
					$timedata = "('".$ggom[$r][$j]."')";
					$sql = $sql.$timedata;
					$db->query($sql);
				}	
			}
		}	
		else{
			echo 'db연결실패'.'<br/>';
		}
		mysqli_close($db);		
?> 
</body>
</html>